<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WatchModel;

class WatchController extends Controller
{
    public function admin_watch()
    {
        $data['getData'] = WatchModel::all();
        return view('admin.watch.list', $data);
    }

    public function admin_watch_post(Request $request)
    {
        if($request->add_to_update == 'Add') {
            $insertData = request()->validate([
                'headline_title' => 'required',
                'watch_url' => 'required',
            ]);
            $insertData = new WatchModel;
        } else {
            $insertData = WatchModel::find($request->id);
        }

        $insertData->headline_title = trim($request->headline_title);
        $insertData->watch_url = trim($request->watch_url);
        $insertData->save();
        return redirect()->back()->with('success', 'Data Insert Successfully');
    }
}
