<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogoModel;
use App\Models\FavIconModel;
use Str;

class LogoController extends Controller
{
    public function logo_list()
    {
        $data['getRecord'] = LogoModel::all();
        return view('admin.logo.logolist', $data);
    }

    public function logo_list_post(Request $request)
    {
        if($request->add_to_update == 'Add') {
            $insertData = new LogoModel;
        } else {
            $insertData = LogoModel::find($request->id);
        }
        if(!empty($request->file('image_one'))){
            if(!empty($insertData->image_one) && file_exists('public/images/logo/'.$insertData->image_one))
            {
                unlink('public/images/logo/'.$insertData->image_one);
            }
            $file       = $request->file('image_one');
            $randomStr  = Str::random(10);
            $filename   = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/images/logo', $filename);
            $insertData->image_one = $filename; 
        }
        if(!empty($request->file('image_two'))){
            if(!empty($insertData->image_two) && file_exists('public/images/logo/'.$insertData->image_two))
            {
                unlink('public/images/logo/'.$insertData->image_two);
            }
            $file       = $request->file('image_two');
            $randomStr  = Str::random(10);
            $filename   = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/images/logo', $filename);
            $insertData->image_two = $filename; 
        }
        $insertData->save();
        return redirect()->back()->with('success', 'Insert Data Successfully');
    }

    public function favicon_list()
    {
        $data['getRecord'] = FavIconModel::all();
        return view('admin.logo.faviconlist', $data);
    }

    public function favicon_list_post(Request $request)
    {
        // dd($request->all());

        if($request->add_to_update == 'Add') {
            $insertData = new FavIconModel;
        }else {
            $insertData = FavIconModel::find($request->id);
        }
        if(!empty($request->file('image'))){
            if(!empty($insertData->image) && file_exists('public/images/favicon/'.$insertData->image))
            {
                unlink('public/images/favicon/'.$insertData->image);
            }
            $file       = $request->file('image');
            $randomStr  = Str::random(10);
            $filename   = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/images/favicon', $filename);
            $insertData->image = $filename; 
        }

        $insertData->save();
        return redirect()->back()->with('success', 'Data Insert Successfully');
        
    }
}
