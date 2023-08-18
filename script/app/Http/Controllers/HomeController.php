<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){
        return view("front.pages.index");
    }
    public function about(Request $request){
        return view("front.pages.about",compact("request"));
    }
    public function blog(Request $request){
        return view("front.pages.blog",compact("request"));
    }
    public function blog_dtls($slug){
        $blog_dtls = DB::table('blogs')->where("slug",$slug)->first();
        $blog_imgs = DB::table('blog_mul_images')->where("b_id",$blog_dtls->id)->get();
        return view("front.pages.blog_details",compact("blog_dtls","blog_imgs"));
    }
    public function team(Request $request){
        return view("front.pages.team",compact("request"));
    }
    public function team_dtls($slug){
        $team_dtls = DB::table('teams')->where("slug",$slug)->first();
        $team_imgs = DB::table('team_work_images')->where("t_id",$team_dtls->id)->get();
        return view("front.pages.team_details",compact("team_dtls","team_imgs"));
    }
    public function service(Request $request){
        return view("front.pages.service",compact("request"));
    }
    public function service_dtls($slug){
        $service_dtls = DB::table('services')->where("slug",$slug)->first();
        $service_imgs = DB::table('service_mul_images')->where("s_id",$service_dtls->id)->get();
        return view("front.pages.service_dtls",compact("service_dtls","service_imgs"));
    }
    public function pricing(Request $request){
        return view("front.pages.pricing",compact("request"));
    }
    public function aftercare(Request $request){
        return view("front.pages.aftercare",compact("request"));
    }
    // public function faq(Request $request){
    //     return view("front.pages.faq",compact("request"));
    // }
    public function portfolio(Request $request){
        return view("front.pages.portfolio",compact("request"));
    }
    public function gallery(Request $request){
        return view("front.pages.gallery",compact("request"));
    }
    public function showgallery(Request $request){
        return view("front.pages.blog",compact("request"));
    }
    public function gallerysearchimage(Request $request){
        return view("front.pages.gallerysearchimage",compact("request"));
    }
    public function contact(Request $request){
        $settings=DB::table('settings')->where('id','1')->first();
        return view("front.pages.contact",compact("request","settings"));
    }
}
