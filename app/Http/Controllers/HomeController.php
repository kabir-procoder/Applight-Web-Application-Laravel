<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;
use App\Models\AboutModel;
use App\Models\WatchModel;
use App\Models\FeaturesModel;
use App\Models\OurTeamModel;
use App\Models\TeamMemberModel;
use App\Models\TestimonialsSectionModel;
use App\Models\TestimonialMessageModel;
use App\Models\FaqSectionModel;
use App\Models\FaqBodyInfoModel;
use App\Models\ContactUsModel;
use App\Models\ContactUsSectionModel;
use App\Models\ContactUsAddressModel;
use App\Mail\ContactUsMail;
use App\Models\DownloadSectionModel;
use App\Models\DownloadAppModel;
use App\Models\FooterModel;
use App\Models\LogoModel;
use App\Models\FavIconModel;
use App\Models\SeoModel;
use App\Models\User;
use Auth;
use Str;
use Mail;

class HomeController extends Controller
{
    public function index()
    {
        $data['getUserData']                    = User::all();
        $data['getHomeData']                    = HomeModel::all();
        $data['getAboutData']                   = AboutModel::all();
        $data['getWatchData']                   = WatchModel::all();
        $data['getFeaturesData']                = FeaturesModel::all();
        $data['getOurTeamData']                 = OurTeamModel::all();
        $data['getTeamMemberData']              = TeamMemberModel::all();
        $data['getTestimonialsSectionData']     = TestimonialsSectionModel::all();
        $data['getTestimonialsMessageData']     = TestimonialMessageModel::all();
        $data['getFaqSectionData']              = FaqSectionModel::all();
        $data['getFaqBodyData']                 = FaqBodyInfoModel::all();
        $data['getContactSectionData']          = ContactUsSectionModel::all();
        $data['getContactAddressData']          = ContactUsAddressModel::all();
        $data['getDownloadSectionData']         = DownloadSectionModel::all();
        $data['getDownloadData']                = DownloadAppModel::all();
        $data['getFooterData']                  = FooterModel::all();
        $data['getLogoData']                    = LogoModel::all();
        $data['getFaviconData']                 = FavIconModel::all();
        $data['getSeoData']                     = SeoModel::all();

        return view('index', $data);
    }

    public function home()
    {
        $data['getData'] = HomeModel::all();
        return view('admin.home.list', $data);
    }

    // Home Banner Section
    public function admin_home_post(Request $request)
    {
        if($request->add_to_update == "Add") {
            $insertData = request()->validate([
                'image_one'     => 'required',
                'image_two'     => 'required',
                'image_three'   => 'required',
            ]);
            $insertData = new HomeModel;
        }else {
            $insertData = HomeModel::find($request->id);
        }

        $insertData->title          = trim($request->title);
        $insertData->sub_title      = trim($request->sub_title);
        $insertData->home_url       = trim($request->home_url);
        $insertData->sub_title_two  = trim($request->sub_title_two);
        $insertData->description    = trim($request->description);
        $insertData->image_one_url  = trim($request->image_one_url  );
        $insertData->image_two_url  = trim($request->image_two_url);
        if(!empty($request->file('image_one'))){
            if(!empty($insertData->image_one) && file_exists('public/images/'.$insertData->image_one)) 
            {
                unlink('public/images/'.$insertData->image_one);
            }
            $file       = $request->file('image_one');
            $randomStr  = Str::random(10);
            $filename   = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/images', $filename);
            $insertData->image_one = $filename;
        }
        if(!empty($request->file('image_two'))){
            if(!empty($insertData->image_two) && file_exists('public/images/'.$insertData->image_two)) 
            {
                unlink('public/images/'.$insertData->image_two);
            }
            $file       = $request->file('image_two');
            $randomStr  = Str::random(10);
            $filename   = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/images', $filename);
            $insertData->image_two = $filename;
        }
        if(!empty($request->file('image_three'))){
            if(!empty($insertData->image_three) && file_exists('public/images/'.$insertData->image_three)) 
            {
                unlink('public/images/'.$insertData->image_three);
            }
            $file       = $request->file('image_three');
            $randomStr  = Str::random(10);
            $filename   = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/images', $filename);
            $insertData->image_three = $filename;
        }

        $insertData->save();
        return redirect()->back()->with('success', 'Data Insert Successfully');

    }

    public function contact_post(Request $request)
    {
        $insertData = new ContactUsModel;
        $insertData->name       = trim($request->name);
        $insertData->email      = trim($request->email);
        $insertData->subject    = trim($request->subject);
        $insertData->message    = trim($request->message);
        $insertData->save();

        Mail::to('mdhumaonkabir.official@gmail.com')->send(new ContactUsMail($request));

        return redirect()->back()->with('success', 'Data Send Successfully');

    }

}
