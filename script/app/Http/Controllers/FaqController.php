<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function list_faq(Request $request)
    {
        return view("admin.pages.faq.index",compact("request"));
    }
    public function add_faq()
    {
        return view("admin.pages.faq.create");
    }
    public function addFaq(Request $request)
    {
       $table = new Faq;
       $table->question=$request->question;
       $table->answer=$request->answer;
       $table->save();
       toast("You have been successfully submitted","success");
       return back();
    }
    public function edit_faq($id)
    {
        $data = Faq::find($id);
        return view("admin.pages.faq.edit",compact("data"));
    }
    public function editFaq(Request $request,$id)
    {
        $data = Faq::find($id);
        $data->question=$request->question;
        $data->answer=$request->answer;
        $data->save();
        toast("You have been successfully updated","success");
        return back();
    }
    public function deleteFaq($id)
    {
        $data = Faq::find($id);
        $data->delete($id);
        toast("You have successfully deleted","success");
        return back();
    }
}
