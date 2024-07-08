<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FaqSectionModel;
use App\Models\FaqBodyInfoModel;

class FaqController extends Controller
{
    public function faq_section_list()
    {
        $data['getRecord'] = FaqSectionModel::all();
        return view('admin.faq.sectioninfo', $data);
    }

    public function faq_section_post(Request $request)
    {
        if($request->add_to_update == "Add") {
            $insertData = request()->validate([
                'headline_title'        => 'required',
                'headline_description'  => 'required',
            ]);
            $insertData = new FaqSectionModel;
        } else {
            $insertData = FaqSectionModel::find($request->id);
        }
        $insertData->headline_title         = trim($request->headline_title);
        $insertData->headline_description   = trim($request->headline_description);
        $insertData->save();
        return redirect()->back()->with('success', 'Data Insert Successfully');
    }

    public function faq_bodyinfo_list()
    {
        $data['getRecord'] = FaqBodyInfoModel::all();
        return view('admin.faq.faqbodyinfo', $data);
    }

    public function faq_bodyinfo_add()
    {
        return view('admin.faq.faqbodyinfoadd');
    }

    public function faq_bodyinfo_post(Request $request)
    {
       $insertData = new  FaqBodyInfoModel;
       $insertData->question = trim($request->question);
       $insertData->answer   = trim($request->answer);
       $insertData->save();
       return redirect('admin/faq/faqbodyinfo/list')->with('success', 'Data Insert Successfully');
    }

    public function faq_bodyinfo_edit($id, Request $request)
    {
        $data['getRecord'] = FaqBodyInfoModel::find($id);
        return view('admin.faq.faqbodyinfoedit', $data);
    }

    public function faq_bodyinfo_update($id, Request $request)
    {
       $insertData = FaqBodyInfoModel::find($id);
       $insertData->question = trim($request->question);
       $insertData->answer   = trim($request->answer);
       $insertData->save();
       return redirect('admin/faq/faqbodyinfo/list')->with('success', 'Data Update Successfully');
    }

    public function faq_bodyinfo_delete($id)
    {
        $insertData = FaqBodyInfoModel::find($id);
        $insertData->delete();
        return redirect()->back()->with('success', 'Data Delete Successfully');
    }


}
