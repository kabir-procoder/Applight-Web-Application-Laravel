<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DownloadSectionModel;
use App\Models\DownloadAppModel;
use Str;

class DownloadController extends Controller
{
    public function download_section()
    {
        $data['getRecord'] = DownloadSectionModel::all();
        return view('admin.download.section', $data);
    }

    public function download_section_post(Request $request)
    {
        if($request->add_to_update == 'Add') {
            $insertData = request()->validate([
                'headline_title'        => 'required',
                'headline_description'  => 'required',
            ]);
            $insertData = new DownloadSectionModel;
        } else {
            $insertData = DownloadSectionModel::find($request->id);
        }
        $insertData->headline_title         = trim($request->headline_title);
        $insertData->headline_description   = trim($request->headline_description);
        $insertData->save();
        return redirect()->back()->with('success', 'Data Insert Successfully');
    }

    public function download_applist()
    {
        $data['getRecord'] = DownloadAppModel::get();
        return view('admin.download.downloadapplist', $data);
    }

    public function download_applist_add()
    {
        return view('admin.download.downloadappadd');
    }

    public function download_applist_post(Request $request)
    {
        $insertData = new DownloadAppModel;
        $insertData->image_url = trim($request->image_url);
        if(!empty($request->file('image'))){
            if(!empty($insertData->image) && file_exists('public/images/download/'.$insertData->image))
            {
                unlink('public/images/team/'.$insertData->image);
            }
            $file       = $request->file('image');
            $randomStr  = Str::random(10);
            $filename   = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/images/download', $filename);
            $insertData->image = $filename;
        }
        $insertData->save();
        return redirect('admin/download/applist')->with('success', 'Data Insert Successfully');
    }

    public function download_applist_edit($id, Request $request)
    {
        $data['getRecord'] = DownloadAppModel::find($id);
        return view('admin.download.downloadappedit', $data);
    }

    public function download_applist_update($id, Request $request)
    {
        $insertData = DownloadAppModel::find($id);
        $insertData->image_url = trim($request->image_url);
        if(!empty($request->file('image'))){
            if(!empty($insertData->image) && file_exists('public/images/download/'.$insertData->image))
            {
                unlink('public/images/download/'.$insertData->image);
            }
            $file       = $request->file('image');
            $randomStr  = Str::random(10);
            $filename   = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/images/download', $filename);
            $insertData->image = $filename;
        }
        $insertData->save();
        return redirect('admin/download/applist')->with('success', 'Data Insert Successfully');
    }

    public function download_applist_delete($id)
    {
        $insertData = DownloadAppModel::find($id);
        if(!empty($insertData->image) && file_exists('public/images/download/'.$insertData->image))
        {
            unlink('public/images/download/'.$insertData->image);
        }
        $insertData->delete();
        return redirect('admin/download/applist')->with('success', 'Data Delete Successfully');
    }
}
