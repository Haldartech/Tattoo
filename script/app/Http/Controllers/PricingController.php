<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pricing;

class PricingController extends Controller
{
    public function list_pricing(Request $request)
    {
        return view("admin.pages.pricing.index",compact("request"));
    }
    public function add_pricing()
    {
        return view("admin.pages.pricing.create");
    }
    public function addPricing(Request $request)
    {
       $table = new Pricing;
       $table->title=$request->title;
       $table->currency=$request->currency;
       $table->amount=$request->amount;
       $table->save();
       toast("You have been successfully submitted","success");
       return back();
    }
    public function edit_pricing($id)
    {
        $data = Pricing::find($id);
        return view("admin.pages.pricing.edit",compact("data"));
    }
    public function editPricing(Request $request,$id)
    {
        $data = Pricing::find($id);
        $data->title=$request->title;
        $data->currency=$request->currency;
        $data->amount=$request->amount;
        $data->save();
        toast("You have been successfully updated","success");
        return back();
    }
    public function deletePricing($id)
    {
        $data = Pricing::find($id);
        $data->delete($id);
        toast("You have successfully deleted","success");
        return back();
    }
}
