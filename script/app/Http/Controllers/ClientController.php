<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Helper;

class ClientController extends Controller
{
    public function list_client(Request $request)
    {
        return view("admin.pages.clients.index",compact("request"));
    }
    public function add_client()
    {
        return view("admin.pages.clients.create");
    }
    public function addClient(Request $request)
    {
        $table = new Client;
        $table->link=$request->link;
        if ($request->hasFile('c_image')) {
            $image = $request->file('c_image');
            $new_file_name=Helper::imageConvert("client-",'client',$image);
            $table->c_image=$new_file_name;
            }
        $table->save();
        toast("You have been successfully submitted","success");
        return back();
    }
    public function edit_client($id)
    {
        $data = Client::find($id);
        return view("admin.pages.clients.edit",compact("data"));
    }
    public function editClient(Request $request, $id)
    {
        $data = Client::find($id);
        $data->link=$request->link;
        if ($request->hasFile('c_image')) {
            $image_path=('public/images/client/'.$data->c_image);
           if (file_exists($image_path) && !empty($data->c_image))
            {
            unlink($image_path);
            }
            $image = $request->file('c_image');
            $new_file_name=Helper::imageConvert("client-",'client',$image);
            $data->c_image=$new_file_name;
            }
        $data->save();
        toast("You have been successfully updated","success");
        return back();
    }
    public function deleteClient($id)
    {
        $data = Client::find($id);
        $data->delete($id);
        toast("You have successfully deleted","success");
        return back();
    }
}
