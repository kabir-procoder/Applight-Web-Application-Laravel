<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\ContactUsModel;
use App\Models\SeoModel;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['TotalUserCount']             = User::count();
        $data['TotalContactusCount']        = ContactUsModel::count();
        $data['TodayContactusCount']        = ContactUsModel::whereDate('created_at', Carbon::today())->count();
        $data['YesterdayContactusCount']    = ContactUsModel::whereDate('created_at', Carbon::yesterday())->count();
        return view('admin.dashboard', $data);        
    }

    public function admin_seo()
    {
        $data['getRecord'] = SeoModel::all();
        return view('admin.seo.list', $data);
    }

    public function admin_seo_post(Request $request)
    {
        if($request->add_to_update == 'Add') {
            $insertData = request()->validate([
                'meta_title'            => 'required',
                'meta_description'      => 'required',
                'meta_keyword'          => 'required',
                'website_developer'     => 'required',
            ]);
            $insertData = new SeoModel;
        }else {
            $insertData = SeoModel::find($request->id);
        }
        $insertData->meta_title         = trim($request->meta_title);
        $insertData->meta_description   = trim($request->meta_description);
        $insertData->meta_keyword       = trim($request->meta_keyword);
        $insertData->website_developer  = trim($request->website_developer);
        $insertData->save();
        return redirect()->back()->with('success', 'Data Insert Successfully');
    }
}
