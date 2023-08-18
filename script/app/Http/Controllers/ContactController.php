<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ContactDtl;

class ContactController extends Controller
{
    public function contact_list(Request $request)
    {
        return view("admin.pages.contact.contact_list",compact("request"));
    }
    public function addContact(Request $request)
    {
        $table = new Contact;
        $table->name=$request->name;
        $table->phone=$request->phone;
        $table->email=$request->email;
        $table->subject=$request->subject;
        $table->message=$request->message;
        $table->save();
        toast("You have successfully submitted your message!","success");
        return back();
    }
    function deleteContact($id)
    {
        $data = Contact::find($id);
        $data->delete($id);
        toast("You have successfully deleted","success");
        return back();
    }

    public function list_contactdtl(Request $request)
    {
        return view("admin.pages.contact.index",compact("request"));
    }
    public function add_contactdtl(Request $request)
    {
        return view("admin.pages.contact.create",compact("request"));
    }
    public function addContactdtl(Request $request)
    {
        $table = new ContactDtl;
        $table->title=$request->title;
        $table->desc=$request->desc;
        $table->save();
        toast("You have successfully submitted","success");
        return redirect("/admin/list-contactdtl");
    }
    public function edit_contactdtl($id)
    {
        $data = ContactDtl::find($id);
        return view("admin.pages.contact.edit",compact("data"));
    }
    public function editContactdtl(Request $request,$id)
    {
        $data = ContactDtl::find($id);
        $data->title=$request->title;
        $data->desc=$request->desc;
        $data->save();
        toast("You have successfully updatted","success");
        return back();
    }
}
