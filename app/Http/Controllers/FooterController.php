<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FooterModel;

class FooterController extends Controller
{
    public function footer_info()
    {
        $data['getRecord'] = FooterModel::all();
        return view('admin.footer.list', $data);
    }

    public function footer_info_post(Request $request)
    {
        if($request->add_to_update == 'Add') {
            $insertData = request()->validate([
                'footer_by' => 'required',
                'footer_url' => 'required',
                'footer_by' => 'required',
            ]);
            $insertData = new FooterModel;
        } else {
            $insertData = FooterModel::find($request->id);
        }
        $insertData->footer_copyright   = trim($request->footer_copyright);
        $insertData->footer_url         = trim($request->footer_url);
        $insertData->footer_by          = trim($request->footer_by);
        $insertData->save();
        return redirect()->back()->with('success', 'Data Insert Successfully');
    }
}
