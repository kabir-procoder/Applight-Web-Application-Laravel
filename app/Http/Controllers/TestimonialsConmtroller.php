<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestimonialsSectionModel;
use App\Models\TestimonialMessageModel;
use Str;

class TestimonialsConmtroller extends Controller
{
    public function testimonialsection_list()
    {
        $data['getRecord'] = TestimonialsSectionModel::all();
        return view('admin.testimonials.sectioninfo', $data);
    }

    public function testimonialsection_post(Request $request)
    {
        if($request->add_to_update == "Add"){
            $insertData = request()->validate([
                'headline_title'        => 'required',
                'headline_description'  => 'required',
            ]);
            $insertData = new TestimonialsSectionModel;
        } else {
            $insertData = TestimonialsSectionModel::find($request->id);
        }

        $insertData->headline_title         = trim($request->headline_title);
        $insertData->headline_description   = trim($request->headline_description);
        $insertData->save();
        return redirect()->back()->with('success', 'Data Insert Successfully');
    }

    // Testimonials Message List
    public function testimonial_message_list()
    {
        $data['getRecord'] = TestimonialMessageModel::get();
        return view('admin.testimonials.messagelist', $data);
    }

    public function testimonial_message_add()
    {
        return view('admin.testimonials.messageadd');
    }

    public function testimonial_message_post(Request $request)
    {
        $insertData = new TestimonialMessageModel;
        $insertData->name           = trim($request->name);
        $insertData->position       = trim($request->position);
        $insertData->description    = trim($request->description);
        if(!empty($request->file('image'))){
            $file       = $request->file('image');
            $randomStr  = Str::random(10);
            $filename   = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/images/testimonial', $filename);
            $insertData->image = $filename;
        }
        $insertData->save();
        return redirect('admin/testimonial/message/list')->with('success', 'Data Insert successfully');
    }

    public function testimonial_message_edit($id, Request $request)
    {
        $data['getRecord'] = TestimonialMessageModel::find($id);
        return view('admin.testimonials.messageedit', $data);
    }

    public function testimonial_message_update($id, Request $request)
    {
        $insertData = TestimonialMessageModel::find($id);
        $insertData->name           = trim($request->name);
        $insertData->position       = trim($request->position);
        $insertData->description    = trim($request->description);

        if(!empty($request->file('image'))){
            if(!empty($insertData->image) && file_exists('public/images/team/'.$insertData->image))
            {
                unlink('public/images/testimonial/'.$insertData->image);
            }
            $file       = $request->file('image');
            $randomStr  = Str::random(10);
            $filename   = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/images/testimonial', $filename);
            $insertData->image = $filename;
        }
        $insertData->save();
        return redirect('admin/testimonial/message/list')->with('success', 'Data Update Successfully');
    }

    public function testimonial_message_delete($id)
    {
        $insertData = TestimonialMessageModel::find($id);
        if(!empty($insertData->image) && file_exists('public/images/testimonial/'.$insertData->image))
            {
                unlink('public/images/testimonial/'.$insertData->image);
            }
        $insertData->delete();
        return redirect()->back()->with('success', 'Data Delete Successfully');
    }


}
