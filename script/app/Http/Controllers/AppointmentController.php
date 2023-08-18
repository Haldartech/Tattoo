<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\AppointmentServArt;
use Twilio\Rest\Client;

class AppointmentController extends Controller
{
    public function list_app(Request $request)
    {
        return view("admin.pages.appointment.index",compact("request"));
    }
    public function add_app()
    {
        return view("admin.pages.appointment.create");
    }
    public function addApp(Request $request)
    {
       $table = new AppointmentServArt;
       $table->service=$request->service;
       $table->artist=$request->artist;
       $table->save();
       toast("You have been successfully submitted","success");
       return back();
    }
    public function edit_app($id)
    {
        $data = AppointmentServArt::find($id);
        return view("admin.pages.appointment.edit",compact("data"));
    }
    public function editApp(Request $request,$id)
    {
        $data = AppointmentServArt::find($id);
        $data->service=$request->service;
        $data->artist=$request->artist;
        $data->save();
        toast("You have been successfully updated","success");
        return back();
    }
    public function deleteApp($id)
    {
        $data = AppointmentServArt::find($id);
        $data->delete($id);
        toast("You have successfully deleted","success");
        return back();
    }

    // List Appointment
    public function list_appointment(Request $request)
    {
        return view("admin.pages.appointment.appointment_list",compact("request"));
    }
    public function addAppointment(Request $request)
    {
       $table = new Appointment;
       $table->name=$request->name;
       $table->phone=$request->phone;
       $table->email=$request->email;
       $table->date=$request->date;
       $table->service=$request->service;
       $table->artist=$request->artist;
       $table->comment=$request->comment;
       $table->save();
       toast("You have been successfully submitted","success");
       return back();
    }
    public function deleteAppointment($id)
    {
        $data = Appointment::find($id);
        $data->delete($id);
        toast("You have successfully deleted","success");
        return back();
    }
    public function acceptAppointment(Request $request)
    {
    $receiver_number = $request->acc_number;
    $receiver_name = $request->acc_name;
    $message = 'Welcome '.$receiver_name.'. Your Appointment have been done. ';
    try {
        $account_sid = $_ENV["TWILIO_SID"];
        $auth_token = $_ENV["TWILIO_TOKEN"];
        $twilio_number = $_ENV["TWILIO_FROM"];

        // dump($account_sid);
        // dump($auth_token);
        // die;

        $client = new Client($account_sid, $auth_token);
        $client->messages->create($receiver_number,[
            'from' => $twilio_number,
            'body' => $message
        ]);
        toast("Your message have been sent successfully","success");
        return redirect()->back();
    }catch (Exception $e) {
        return $e->getMessage();
    }
    }

    public function declineAppointment(Request $request)
    {
        $dec_receiver_number = $request->dec_number;
        $dec_receiver_name = $request->dec_name;
        $dec_message = 'Welcome '.$dec_receiver_name.'. Your Appointment have been decline. ';
    try {
        $dec_account_sid = $_ENV["TWILIO_SID"];
        $dec_auth_token = $_ENV["TWILIO_TOKEN"];
        $dec_twilio_number = $_ENV["TWILIO_FROM"];

        // dump($account_sid);
        // dump($auth_token);
        // die;

        $dec_client = new Client($dec_account_sid, $dec_auth_token);
        $dec_client->messages->create($dec_receiver_number,[
            'from' => $dec_twilio_number,
            'body' => $dec_message
        ]);
        toast("Your message have been sent successfully","success");
        return redirect()->back();
    }catch (Exception $e) {
        return $e->getMessage();
    }
    }

    public function rescheduleAppointment($id,Request $request)
    {

       $table = Appointment::find($id);
       $table->date=$request->date;
       $table->save();

       $res_receiver_number = $request->res_number;
       $res_receiver_name = $request->res_name;
       $res_receiver_date = $request->res_date;
       $res_message = 'Welcome '.$res_receiver_name.'. Your Appointment have been reschedule in '.date('d-m-Y', strtotime($res_receiver_date)).'.';
   try {
       $res_account_sid = $_ENV["TWILIO_SID"];
       $res_auth_token = $_ENV["TWILIO_TOKEN"];
       $res_twilio_number = $_ENV["TWILIO_FROM"];

       // dump($account_sid);
       // dump($auth_token);
       // die;

       $res_client = new Client($res_account_sid, $res_auth_token);
       $res_client->messages->create($res_receiver_number,[
           'from' => $res_twilio_number,
           'body' => $res_message
       ]);
       toast("Your message have been sent successfully","success");
       return redirect()->back();
    }catch (Exception $e) {
       return $e->getMessage();
   }
    }
}
