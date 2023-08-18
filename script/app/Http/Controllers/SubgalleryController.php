<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subgallery;
use DB;

class SubgalleryController extends Controller
{
    public function list_subgallery(Request $request)
    {
        return view("admin.pages.subgallery.index",compact("request"));
    }
    // public function gettag(Request $request)
    // {
    // //     echo "addd";
    //     echo $tid = $request->post('gal_id');
    //     $form = DB::table('tags')->where("gal_id",$tid)->orderBy("tag","asc")->get();
    //     $html = "<option value=''>Select Tag</option>";
    //     foreach($form as $list){
    //         $selected = ($list->gal_id == $tid) ? "selected" : ""; // Check if the current option is the selected one
    //         $html .= '<option value="' . $list->gal_id . '" ' . $selected . '>' . $list->tag . '</option>';
    //     }
    //     echo $html;
    // }
}
