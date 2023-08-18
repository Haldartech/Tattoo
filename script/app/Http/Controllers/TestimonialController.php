<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Helper;

class TestimonialController extends Controller
{
    public function list_testimonial(Request $request)
    {
        return view("admin.pages.testimonial.index",compact("request"));
    }
    public function add_testimonial()
    {
        return view("admin.pages.testimonial.create");
    }
    public function addTestimonial(Request $request)
    {
        $table = new Testimonial;
        $table->name=$request->name;
        $table->testimonial=$request->testimonial;
        if ($request->hasFile('t_image')) {
            $image = $request->file('t_image');
            $new_file_name=Helper::imageConvert("testi-",'testimonial',$image);
            $table->t_image=$new_file_name;
            }
        $table->save();
        toast("You have been successfully submitted","success");
        return back();
    }
    public function edit_testimonial($id)
    {
        $data = Testimonial::find($id);
        return view("admin.pages.testimonial.edit",compact("data"));
    }
    public function editTestimonial(Request $request,$id)
    {
        $data = Testimonial::find($id);
        $data->name=$request->name;
        $data->testimonial=$request->testimonial;
        if ($request->hasFile('t_image')) {
            $image_path=('public/images/testimonial/'.$data->t_image);
           if (file_exists($image_path) && !empty($data->t_image))
            {
            unlink($image_path);
            }
            $image = $request->file('t_image');
            $new_file_name=Helper::imageConvert("testi-",'testimonial',$image);
            $data->t_image=$new_file_name;
            }
        $data->save();
        toast("You have been successfully updated","success");
        return back();
    }
    public function deleteTestimonial($id)
    {
        $data = Testimonial::find($id);
        $data->delete($id);
        toast("You have been successfully deleted","success");
        return back();
    }
}
