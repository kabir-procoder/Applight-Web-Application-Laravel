<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeaturesModel;
use Str;

class FeaturesController extends Controller
{
    public function admin_features()
    {
        $data['getData'] = FeaturesModel::all();
        return view('admin.features.list', $data);
    }

    public function admin_features_post(Request $request)
    {
        if($request->add_to_update == 'Add') {
            $insertData = request()->validate([
                'headline_title' => 'required',
                'headline_description'          => 'required',
                'leftcardfirst_title'           => 'required',
                'leftcardfirst_description'     => 'required',
                'leftcardsecound_title'         => 'required',
                'leftcardsecound_description'   => 'required',
                'leftcardthird_title'           => 'required',
                'leftcardthird_description'     => 'required',
                'rightcardfirst_title'          => 'required',
                'rightcardfirst_description'    => 'required',
                'rightcardsecound_title'        => 'required',
                'rightcardsecound_description'  => 'required',
                'rightcardthird_title'          => 'required',
                'rightcardthird_description'    => 'required',
            ]);
            $insertData = new FeaturesModel;
        } else {
            $insertData = FeaturesModel::find($request->id);
        }

        
        $insertData->headline_title                 = trim($request->headline_title);
        $insertData->headline_description           = trim($request->headline_description);
        $insertData->leftcardfirst_title            = trim($request->leftcardfirst_title);
        $insertData->leftcardfirst_description      = trim($request->leftcardfirst_description);
        $insertData->leftcardsecound_title          = trim($request->leftcardsecound_title);
        $insertData->leftcardsecound_description    = trim($request->leftcardsecound_description);
        $insertData->leftcardthird_title            = trim($request->leftcardthird_title);
        $insertData->leftcardthird_description      = trim($request->leftcardthird_description);
        $insertData->rightcardfirst_title           = trim($request->rightcardfirst_title);
        $insertData->rightcardfirst_description     = trim($request->rightcardfirst_description);
        $insertData->rightcardsecound_title         = trim($request->rightcardsecound_title);
        $insertData->rightcardsecound_description   = trim($request->rightcardsecound_description);
        $insertData->rightcardthird_title           = trim($request->rightcardthird_title);
        $insertData->rightcardthird_description     = trim($request->rightcardthird_description);
        if(!empty($request->file('middle_image'))){
            if(!empty($insertData->middle_image) && file_exists('public/images/'.$insertData->middle_image)) 
            {
                unlink('public/images/'.$insertData->middle_image);
            }
            $file       = $request->file('middle_image');
            $randomStr  = Str::random(10);
            $filename   = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/images', $filename);
            $insertData->middle_image = $filename;
        }

        $insertData->save();
        return redirect()->back()->with('success', 'Data Insert Successfully');
    }
}
