<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\WatchController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\TestimonialsConmtroller;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\FooterController;



Route::get('/', [HomeController::class, 'index']);
Route::post('frontend/contact/post', [HomeController::class, 'contact_post']);

Route::get('login', [AuthController::class, 'login']);
Route::post('login_post', [AuthController::class, 'login_post']);
Route::get('forgot-password', [AuthController::class, 'forgot_password']);


Route::group(['middleware' => 'admin'], function() {
    // Dashboard
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    // Home
    Route::get('admin/home', [HomeController::class, 'home']);
    Route::post('admin/home/post', [HomeController::class, 'admin_home_post']);
    // About
    Route::get('admin/about', [AboutController::class, 'admin_about']);
    Route::post('admin/about/post',[AboutController::class, 'admin_about_post']);
    // Watch
    Route::get('admin/watch', [WatchController::class, 'admin_watch']);
    Route::post('admin/watch/post', [WatchController::class, 'admin_watch_post']);
    // Features
    Route::get('admin/features', [FeaturesController::class, 'admin_features']);
    Route::post('admin/features/post', [FeaturesController::class, 'admin_features_post']);
    // Our Team
    Route::get('admin/ourteam/sectioninfo', [OurTeamController::class, 'ourteam_sectioninfo']);
    Route::post('admin/ourteam/sectioninfo/post', [OurTeamController::class, 'ourTeamSectionInfoPost']);
    Route::get('admin/ourteam/member/list', [OurTeamController::class, 'ourteam_memberlist']);
    Route::get('admin/ourteam/member/add', [OurTeamController::class, 'ourteam_memberadd']);
    Route::post('admin/ourteam/member/add', [OurTeamController::class, 'ourteam_memberpost']);
    Route::get('admin/ourteam/member/edit/{id}', [OurTeamController::class, 'ourteam_memberedit']);
    Route::post('admin/ourteam/member/edit/{id}', [OurTeamController::class, 'ourteam_memberupdate']);
    Route::get('admin/ourteam/member/delete/{id}', [OurTeamController::class, 'ourteam_memberdelete']);
    // Testimonials
    Route::get('admin/testimonial/tstsectioninfo', [TestimonialsConmtroller::class, 'testimonialsection_list']);
    Route::post('admin/testimonial/tstsectioninfo/post', [TestimonialsConmtroller::class, 'testimonialsection_post']);
    Route::get('admin/testimonial/message/list', [TestimonialsConmtroller::class, 'testimonial_message_list']);
    Route::get('admin/testimonial/message/add', [TestimonialsConmtroller::class, 'testimonial_message_add']);
    Route::post('admin/testimonial/message/post', [TestimonialsConmtroller::class, 'testimonial_message_post']);
    Route::get('admin/testimonial/message/edit/{id}', [TestimonialsConmtroller::class, 'testimonial_message_edit']);
    Route::post('admin/testimonial/message/edit/{id}', [TestimonialsConmtroller::class, 'testimonial_message_update']);
    Route::get('admin/testimonial/message/delete/{id}', [TestimonialsConmtroller::class, 'testimonial_message_delete']);
    // FAQ
    Route::get('admin/faq/faqsectioninfo', [FaqController::class, 'faq_section_list']);
    Route::post('admin/faq/faqsectioninfo/post', [FaqController::class, 'faq_section_post']);
    Route::get('admin/faq/faqbodyinfo/list', [FaqController::class, 'faq_bodyinfo_list']);
    Route::get('admin/faq/faqbodyinfo/add', [FaqController::class, 'faq_bodyinfo_add']);
    Route::post('admin/faq/faqbodyinfo/add/post', [FaqController::class, 'faq_bodyinfo_post']);
    Route::get('admin/faq/faqsectioninfo/edit/{id}', [FaqController::class, 'faq_bodyinfo_edit']);
    Route::post('admin/faq/faqsectioninfo/edit/{id}', [FaqController::class, 'faq_bodyinfo_update']);
    Route::get('admin/faq/faqsectioninfo/delete/{id}', [FaqController::class, 'faq_bodyinfo_delete']);
    // Contact Us
    Route::get('admin/contact/contactsec', [ContactUsController::class, 'contact_section']);
    Route::post('admin/contact/contactsec/post', [ContactUsController::class, 'contact_section_post']);
    Route::get('admin/contact/address', [ContactUsController::class, 'contact_address']);
    Route::post('admin/contact/address/post', [ContactUsController::class, 'contact_address_post']);
    Route::get('admin/contact/mail', [ContactUsController::class, 'contact_mail_list']);
    Route::get('admin/contact/mail/delete/{id}', [ContactUsController::class, 'contact_mail_delete']);
    //Download App
    Route::get('admin/download/dlsectioninfo', [DownloadController::class, 'download_section']);
    Route::post('admin/download/dlsectioninfo/post', [DownloadController::class, 'download_section_post']);
    Route::get('admin/download/applist', [DownloadController::class, 'download_applist']);
    Route::get('admin/download/applist/add', [DownloadController::class, 'download_applist_add']);
    Route::post('admin/download/applist/post', [DownloadController::class, 'download_applist_post']);
    Route::get('admin/download/applist/edit/{id}', [DownloadController::class, 'download_applist_edit']);
    Route::post('admin/download/applist/edit/{id}', [DownloadController::class, 'download_applist_update']);
    Route::get('admin/download/applist/delete/{id}', [DownloadController::class, 'download_applist_delete']);
    // Seo
    Route::get('admin/seo', [DashboardController::class, 'admin_seo']);
    Route::post('admin/seo/post', [DashboardController::class, 'admin_seo_post']);
    //Footer
    Route::get('admin/footer', [FooterController::class, 'footer_info']);
    Route::post('admin/footer/post', [FooterController::class, 'footer_info_post']);
    // Logo-Faveicon
    Route::get('admin/mainlogo/logo', [LogoController::class, 'logo_list']);
    Route::post('admin/mainlogo/logo/post', [LogoController::class, 'logo_list_post']);
    Route::get('admin/mainlogo/favicon', [LogoController::class, 'favicon_list']);
    Route::post('admin/mainlogo/favicon/post', [LogoController::class, 'favicon_list_post']);
    // Admin Account
    Route::get('admin/my_account', [MyAccountController::class, 'my_account']);
    Route::post('admin/my_account/update', [MyAccountController::class, 'my_account_update']);
});

Route::get('logout', [AuthController::class, 'logout']);