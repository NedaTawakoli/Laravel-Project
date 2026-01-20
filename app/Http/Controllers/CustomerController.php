<?php

namespace App\Http\Controllers;
// use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Event\createUserEvent;
class CustomerController extends Controller
{
    //
    public function index(){
    //    return User::all();
      $customer = Customer::all();
        return view('Customer.home',compact('customer'));
    }
    public function create(Request $request){
      $customer = new Customer();
      $request->validate([
        "name"=>"required|min:3|max:30",
        "lastName"=>"required|min:4|max:30",
        "email"=>"required|min:5|max:20",
        "img"=>"nullable|mimes:jpeg,jpg,gif",
      ]);
      $imagePath = null;
      if($request->hasFile('img')){
        $imagePath= $request->file('img')->store('Photos','public');
      }
      $customer->name = $request->name;
      $customer->lastName= $request->lastName;
      $customer->email= $request->email;
      $customer->gender=$request->gender;
      $customer->img_url=$imagePath;
      event(new createUserEvent($customer));
      $customer->save();
      return redirect('customer');
    }
}
