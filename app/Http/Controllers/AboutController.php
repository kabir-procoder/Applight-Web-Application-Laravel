<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutModel;

class AboutController extends Controller
{
    public function admin_about()
    {
        $data['getData'] = AboutModel::all();
        return view('admin.about.list', $data);
    }

    public function admin_about_post(Request $request)
    {
        if($request->add_to_update == "Add") {
            $insertData = request()->validate([
                'headline_title'            => 'required',
                'headline_description'      => 'required',
                'first_card_title'          => 'required',
                'first_card_description'    => 'required',
                'secound_card_title'        => 'required',
                'secound_card_description'  => 'required',
                'third_card_title'          => 'required',
                'third_card_description'    => 'required',
            ]);
            $insertData = new AboutModel;
        }else {
            $insertData = AboutModel::find($request->id);
        }

        $insertData->headline_title             = trim($request->headline_title);
        $insertData->headline_description       = trim($request->headline_description);
        $insertData->first_card_title           = trim($request->first_card_title);
        $insertData->first_card_description     = trim($request->first_card_description);
        $insertData->secound_card_title         = trim($request->secound_card_title);
        $insertData->secound_card_description   = trim($request->secound_card_description);
        $insertData->third_card_title           = trim($request->third_card_title);
        $insertData->third_card_description     = trim($request->third_card_description);

        $insertData->save();
        return redirect()->back()->with('success', 'Data Insert Successfully');
    }
}
