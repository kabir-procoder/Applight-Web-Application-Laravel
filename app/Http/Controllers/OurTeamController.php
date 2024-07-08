<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurTeamModel;
use App\Models\TeamMemberModel;
use Str;

class OurTeamController extends Controller
{
    public function ourteam_sectioninfo()
    {
        $data['getRecord'] = OurTeamModel::all();
        return view('admin.our_team.list', $data);
    }

    public function ourTeamSectionInfoPost(Request $request)
    {
        if($request->add_to_update == "Add"){
            $insertData = request()->validate([
                'headline_title'        => 'required',
                'headline_description'  => 'required',
            ]);
            $insertData = new OurTeamModel;
        } else {
            $insertData = OurTeamModel::find($request->id);
        }

        $insertData->headline_title         = trim($request->headline_title);
        $insertData->headline_description   = trim($request->headline_description);
        $insertData->save();
        return redirect()->back()->with('success','Data Save Successfully');
    }

    public function ourteam_memberlist()
    {
        $data['getRecordList'] = TeamMemberModel::get();
        return view('admin.our_team.team_member_list', $data);
    }

    // Team Member Add Form
    public function ourteam_memberadd()
    {
        return view('admin.our_team.team_member_add');
    }

    // Team Member Add/Insert
    public function ourteam_memberpost(Request $request)
    {
        $insertData = new TeamMemberModel;
        $insertData->name           = trim($request->name);
        $insertData->position       = trim($request->position);
        if(!empty($request->file('image'))){
            $file       = $request->file('image');
            $randomStr  = Str::random(10);
            $filename   = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/images/team', $filename);
            $insertData->image = $filename;
        }

        $insertData->save();
        return redirect('admin/ourteam/member/list')->with('success', 'Data Insert Successfully');
    }

    // Team Member Edit
    public function ourteam_memberedit($id, Request $request)
    {
        $data['getRecord'] = TeamMemberModel::find($id);
        return view('admin.our_team.edit', $data);
    }

    // Team Member Update
    public function ourteam_memberupdate($id, Request $request)
    {
        $insertData = TeamMemberModel::find($id);
        $insertData->name           = trim($request->name);
        $insertData->position       = trim($request->position);
        if(!empty($request->file('image'))){
            if(!empty($insertData->image) && file_exists('public/images/team/'.$insertData->image))
            {
                unlink('public/images/team/'.$insertData->image);
            }
            $file       = $request->file('image');
            $randomStr  = Str::random(10);
            $filename   = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/images/team', $filename);
            $insertData->image = $filename;
        }

        $insertData->save();
        return redirect('admin/ourteam/member/list')->with('success', 'Data Insert Successfully');
    }

    // Delete Team Member
    public function ourteam_memberdelete($id)
    {
        $insertData = TeamMemberModel::find($id);
        if(!empty($insertData->image) && file_exists('public/images/team/'.$insertData->image))
            {
                unlink('public/images/team/'.$insertData->image);
            }
        $insertData->delete();
        return redirect()->back()->with('error', 'Data Parmanent Delete Successfully');
    }



}

