<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubgalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\AftercareController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\PortfolioController;


date_default_timezone_set('Asia/Kolkata');
    Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!!!!";
 });

 Route::get('/', function () {
    return view('admin.pages.authentication.login');
});

 Route::get('/admin', function () {
    return view('admin.pages.authentication.login');
});

Route::post('/adminLogin', [AdminController::class,'adminLogin']);

Route::prefix('admin')->middleware(['chkAdminLogin'])->controller(AdminController::class)->group(function () {
    Route::get('/paydone-list-entry', function (Request $request) {
    return view('admin.pages.entry.paydonelist', compact('request'));
    });

    Route::get('/log-out','logout');

    //change password
    Route::get('/change-password','change_password');
    Route::post('/change-adminLogin','changePassword');

    // Entry
    // Paydone Entry List & edit
    Route::get("/paydone-list-entry",[EntryController::class,"paydone_list_entry"]);

    // Paydue Entry List & edit
    Route::get("/paydue-list-entry",[EntryController::class,"paydue_list_entry"]);

    Route::get("/add-entry",[EntryController::class,"add_entry"]);
    Route::post("/addEntry",[EntryController::class,"addEntry"]);
    Route::get("/edit-entry/{id}",[EntryController::class,"edit_entry"]);
    Route::post("/editEntry/{id}",[EntryController::class,"editEntry"]);
    Route::get("/deleteEntry/{id}",[EntryController::class,"deleteEntry"]);

    // Pages Manager
    Route::get("/list-pages",[PagesController::class,"list_pages"]);
    Route::get("/add-pages",[PagesController::class,"add_pages"]);
    Route::post("/addPages",[PagesController::class,"addPages"]);
    Route::get("/edit-pages/{id}",[PagesController::class,"edit_pages"]);
    Route::post("/editPages/{id}",[PagesController::class,"editPages"]);

    // Banner
    Route::get("/list-banner",[BannerController::class,"list_banner"]);
    Route::get("/add-banner",[BannerController::class,"add_banner"]);
    Route::post("/addBanner",[BannerController::class,"addBanner"]);
    Route::get("/edit-banner/{id}",[BannerController::class,"edit_banner"]);
    Route::post("/editBanner/{id}",[BannerController::class,"editBanner"]);
    Route::get("/deleteBanner/{id}",[BannerController::class,"deleteBanner"]);

    // Banner Title
    Route::get("/list-bannertitle",[BannerController::class,"list_bannertitle"]);
    Route::get("/add-bannertitle",[BannerController::class,"add_bannertitle"]);
    Route::post("/addBannertitle",[BannerController::class,"addBannertitle"]);
    Route::get("/edit-bannertitle/{id}",[BannerController::class,"edit_bannertitle"]);
    Route::post("/editBannertitle/{id}",[BannerController::class,"editBannertitle"]);

    // Portfolioimg
    Route::get("/list-portfolioimg",[PortfolioController::class,"list_portfolioimg"]);
    Route::get("/add-portfolioimg",[PortfolioController::class,"add_portfolioimg"]);
    Route::post("/addPortfolioimg",[PortfolioController::class,"addPortfolioimg"]);
    Route::get("/edit-portfolioimg/{id}",[PortfolioController::class,"edit_portfolioimg"]);
    Route::post("/editPortfolioimg/{id}",[PortfolioController::class,"editPortfolioimg"]);
    Route::get("/deletePortfolioimg/{id}",[PortfolioController::class,"deletePortfolioimg"]);

    // Portfoliovid
    Route::get("/list-portfoliovid",[PortfolioController::class,"list_portfoliovid"]);
    Route::get("/add-portfoliovid",[PortfolioController::class,"add_portfoliovid"]);
    Route::post("/addPortfoliovid",[PortfolioController::class,"addPortfoliovid"]);
    Route::get("/edit-portfoliovid/{id}",[PortfolioController::class,"edit_portfoliovid"]);
    Route::post("/editPortfoliovid/{id}",[PortfolioController::class,"editPortfoliovid"]);
    Route::get("/deletePortfoliovid/{id}",[PortfolioController::class,"deletePortfoliovid"]);

    // Gallery
    Route::get("/list-gallery",[GalleryController::class,"list_gallery"]);
    Route::get("/add-gallery",[GalleryController::class,"add_gallery"]);
    Route::post("/addCategory",[GalleryController::class,"addCategory"]);
    Route::post("/addGallery",[GalleryController::class,"addGallery"]);
    Route::get("/edit-gallery/{id}",[GalleryController::class,"edit_gallery"]);
    Route::post("/editGallery/{id}",[GalleryController::class,"editGallery"]);
    Route::get("/deleteGallery/{id}",[GalleryController::class,"deleteGallery"]);

    // Subgallery
    Route::get("/list-subgallery",[SubgalleryController::class,"list_subgallery"]);
    Route::get("/add-subgallery",[SubgalleryController::class,"add_subgallery"]);
    Route::post("/addSubgallery",[SubgalleryController::class,"addSubgallery"]);
    Route::get("/edit-subgallery/{id}",[SubgalleryController::class,"edit_subgallery"]);
    Route::post("/editSubgallery/{id}",[SubgalleryController::class,"editSubgallery"]);
    Route::get("/deleteSubgallery/{id}",[SubgalleryController::class,"deleteSubgallery"]);

    // Testimonial
    Route::get("/list-testimonial",[TestimonialController::class,"list_testimonial"]);
    Route::get("/add-testimonial",[TestimonialController::class,"add_testimonial"]);
    Route::post("/addTestimonial",[TestimonialController::class,"addTestimonial"]);
    Route::get("/edit-testimonial/{id}",[TestimonialController::class,"edit_testimonial"]);
    Route::post("/editTestimonial/{id}",[TestimonialController::class,"editTestimonial"]);
    Route::get("/deleteTestimonial/{id}",[TestimonialController::class,"deleteTestimonial"]);

    // Client
    Route::get("/list-client",[ClientController::class,"list_client"]);
    Route::get("/add-client",[ClientController::class,"add_client"]);
    Route::post("/addClient",[ClientController::class,"addClient"]);
    Route::get("/edit-client/{id}",[ClientController::class,"edit_client"]);
    Route::post("/editClient/{id}",[ClientController::class,"editClient"]);
    Route::get("/deleteClient/{id}",[ClientController::class,"deleteClient"]);

    // Team
    Route::get("/list-team",[TeamController::class,"list_team"]);
    Route::get("/add-team",[TeamController::class,"add_team"]);
    Route::post("/addTeam",[TeamController::class,"addTeam"]);
    Route::get("/edit-team/{id}",[TeamController::class,"edit_team"]);
    Route::post("/editTeam/{id}",[TeamController::class,"editTeam"]);
    Route::get("/deleteTeam/{id}",[TeamController::class,"deleteTeam"]);

    // About
    Route::get("/list-about",[AboutController::class,"list_about"]);
    Route::get("/add-about",[AboutController::class,"add_about"]);
    Route::post("/addAbout",[AboutController::class,"addAbout"]);
    Route::get("/edit-about/{id}",[AboutController::class,"edit_about"]);
    Route::post("/editAbout/{id}",[AboutController::class,"editAbout"]);
    Route::get("/deleteAbout/{id}",[AboutController::class,"deleteAbout"]);

    // Blog
    Route::get("/list-blog",[BlogController::class,"list_blog"]);
    Route::get("/add-blog",[BlogController::class,"add_blog"]);
    Route::post("/addBlog",[BlogController::class,"addBlog"]);
    Route::get("/edit-blog/{id}",[BlogController::class,"edit_blog"]);
    Route::post("/editBlog/{id}",[BlogController::class,"editBlog"]);
    Route::get("/deleteBlog/{id}",[BlogController::class,"deleteBlog"]);

    // Service
    Route::get("/list-service",[ServiceController::class,"list_service"]);
    Route::get("/add-service",[ServiceController::class,"add_service"]);
    Route::post("/addService",[ServiceController::class,"addService"]);
    Route::get("/edit-service/{id}",[ServiceController::class,"edit_service"]);
    Route::post("/editService/{id}",[ServiceController::class,"editService"]);
    Route::get("/deleteService/{id}",[ServiceController::class,"deleteService"]);

    // Pricing
    Route::get("/list-pricing",[PricingController::class,"list_pricing"]);
    Route::get("/add-pricing",[PricingController::class,"add_pricing"]);
    Route::post("/addPricing",[PricingController::class,"addPricing"]);
    Route::get("/edit-pricing/{id}",[PricingController::class,"edit_pricing"]);
    Route::post("/editPricing/{id}",[PricingController::class,"editPricing"]);
    Route::get("/deletePricing/{id}",[PricingController::class,"deletePricing"]);

    // Appointment Service & Artist
    Route::get("/list-app",[AppointmentController::class,"list_app"]);
    Route::get("/add-app",[AppointmentController::class,"add_app"]);
    Route::post("/addApp",[AppointmentController::class,"addApp"]);
    Route::get("/edit-app/{id}",[AppointmentController::class,"edit_app"]);
    Route::post("/editApp/{id}",[AppointmentController::class,"editApp"]);
    Route::get("/deleteApp/{id}",[AppointmentController::class,"deleteApp"]);

    // Appointment
    Route::get("/list-appointment",[AppointmentController::class,"list_appointment"]);
    Route::post("/addAppointment",[AppointmentController::class,"addAppointment"]);
    // Route::get("/deleteAppointment/{id}",[AppointmentController::class,"deleteAppointment"]);
    Route::post("/acceptAppointment/{id}",[AppointmentController::class,"acceptAppointment"]);
    Route::post("/declineAppointment/{id}",[AppointmentController::class,"declineAppointment"]);
    Route::post("/rescheduleAppointment/{id}",[AppointmentController::class,"rescheduleAppointment"]);


    // Aftercare
    Route::get("/list-aftercare",[AftercareController::class,"list_aftercare"]);
    Route::get("/add-aftercare",[AftercareController::class,"add_aftercare"]);
    Route::post("/addAftercare",[AftercareController::class,"addAftercare"]);
    Route::get("/edit-aftercare/{id}",[AftercareController::class,"edit_aftercare"]);
    Route::post("/editAftercare/{id}",[AftercareController::class,"editAftercare"]);
    Route::get("/deleteAftercare/{id}",[AftercareController::class,"deleteAftercare"]);

    // Faq
    Route::get("/list-faq",[FaqController::class,"list_faq"]);
    Route::get("/add-faq",[FaqController::class,"add_faq"]);
    Route::post("/addFaq",[FaqController::class,"addFaq"]);
    Route::get("/edit-faq/{id}",[FaqController::class,"edit_faq"]);
    Route::post("/editFaq/{id}",[FaqController::class,"editFaq"]);
    Route::get("/deleteFaq/{id}",[FaqController::class,"deleteFaq"]);

    // Process
    Route::get("/list-process",[ProcessController::class,"list_process"]);
    Route::get("/add-process",[ProcessController::class,"add_process"]);
    Route::post("/addProcess",[ProcessController::class,"addProcess"]);
    Route::get("/edit-process/{id}",[ProcessController::class,"edit_process"]);
    Route::post("/editProcess/{id}",[ProcessController::class,"editProcess"]);
    Route::get("/deleteProcess/{id}",[ProcessController::class,"deleteProcess"]);

    //Profile
    Route::get("/profile",[ProfileController::class,"profile"]);
    Route::post("/addProfile/{id}",[ProfileController::class,"addProfile"]);

    //Contact List
    Route::get("/contact_list",[ContactController::class,"contact_list"]);
    Route::get("/deleteContact/{id}",[ContactController::class,"deleteContact"]);
    // frontend Contact
    Route::post("/addContact",[ContactController::class,"addContact"]);

    //Contact Details
    Route::get("/list-contactdtl",[ContactController::class,"list_contactdtl"]);
    Route::get("/add-contactdtl",[ContactController::class,"add_contactdtl"]);
    Route::post("/addContactdtl",[ContactController::class,"addContactdtl"]);
    Route::get("/edit-contactdtl/{id}",[ContactController::class,"edit_contactdtl"]);
    Route::post("/editContactdtl/{id}",[ContactController::class,"editContactdtl"]);

    //Setting
    Route::get("/setting",[SettingController::class,"setting"]);
    Route::post("/editSetting/{id}",[SettingController::class,"editSetting"]);
});

// Category Name Autocomplete in Gallery Create Page
Route::post("/ajax-list-title",[GalleryController::class,"ajax_list_title"]);
// Tag Name listing in Subgallery Page
Route::post("/gettag",[GalleryController::class,"gettag"]);

// Blog Multiple Image Delete
Route::delete('/ajaxBlogImageDelete/{id}',[BlogController::class,'ajaxBlogImageDelete']);
// Gallery Multiple Image Delete
Route::delete('/ajaxGalleryImageDelete/{id}',[GalleryController::class,'ajaxGalleryImageDelete']);
// Team Multiple Image Delete
Route::delete('/ajaxTeamImageDelete/{id}',[TeamController::class,'ajaxTeamImageDelete']);
// Service Multiple Image Delete
Route::delete('/ajaxServiceImageDelete/{id}',[ServiceController::class,'ajaxServiceImageDelete']);

    Route::controller(HomeController::class)->group(function () {
        Route::get("/","index");
        Route::get("/about","about");
        Route::get("/blog","blog");
        Route::get("b/{slug}","blog_dtls");
        Route::get("/team","team");
        Route::get("t/{slug}","team_dtls");
        Route::get("/service","service");
        Route::get("s/{slug}","service_dtls");
        Route::get("/portfolio","portfolio");
        Route::get("/gallery","gallery");
        Route::get("/gallerysearchimage","gallerysearchimage");
        Route::get("/aftercare","aftercare");
        Route::get("/contact","contact");
    });




