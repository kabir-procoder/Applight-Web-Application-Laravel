<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUsSectionModel;
use App\Models\ContactUsAddressModel;
use App\Models\ContactUsModel;

class ContactUsController extends Controller
{
    public function contact_section()
    {
        $data['getRecord'] = ContactUsSectionModel::all();
        return view('admin.contact.contactsection', $data);
    }

    public function contact_section_post(Request $request)
    {
        if($request->add_to_update == 'Add') {
            $insertData = request()->validate([
                'headline_title'        => 'required',
                'headline_description'  => 'required',
            ]);
            $insertData = new ContactUsSectionModel;
        } else {
            $insertData = ContactUsSectionModel::find($request->id);
        }
        $insertData->headline_title         = trim($request->headline_title);
        $insertData->headline_description   = trim($request->headline_description);
        $insertData->save();
        return redirect()->back()->with('success', 'Data Insert Successfully');
    }

    public function contact_mail_list()
    {
        $data['getRecord'] = ContactUsModel::getRecordAll();
        return view('admin.contact.maillist', $data);
    }

    public function contact_mail_delete($id)
    {
        $insertData = ContactUsModel::find($id);
        $insertData->delete();
        return redirect()->back()->with('error', 'Data Delete successfully');
    }

    public function contact_address()
    {
        $data['getRecord'] = ContactUsAddressModel::all();
        return view('admin.contact.contactaddress', $data);
    }

    public function contact_address_post(Request $request)
    {
        if($request->add_to_update == 'Add') {
            $insertData = request()->validate([
                'address_title'     => 'required',
                'address_details'   => 'required',
                'phone_title'       => 'required',
                'phone_details'     => 'required',
                'email_title'       => 'required',
                'email_details'     => 'required',
                'working_title'     => 'required',
                'working_details'   => 'required',
            ]);
            $insertData = new ContactUsAddressModel;
        } else {
            $insertData = ContactUsAddressModel::find($request->id);
        }
        $insertData->address_title      = trim($request->address_title);
        $insertData->address_details    = trim($request->address_details);
        $insertData->phone_title        = trim($request->phone_title);
        $insertData->phone_details      = trim($request->phone_details);
        $insertData->email_title        = trim($request->email_title);
        $insertData->email_details      = trim($request->email_details);
        $insertData->working_title      = trim($request->working_title);
        $insertData->working_details    = trim($request->working_details);
        $insertData->save();
        return redirect()->back()->with('success', 'Data Insert Successfully');
    }
}
