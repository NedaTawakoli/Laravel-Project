<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
class SampleController extends Controller
{
    //
    // public function index(){
    //     session()->put('food','Rice');
    //     session()->forget('food');
    //     // session end
    //     session()->flash('massage','What is this');
    //     return session()->all();
    // }
    // End Session 
    // Start Cache 
    public function show(){
        Cache::put('name','Laravel');
       $natija = Cache::get('name','Laravel');
        return "Welcome to the " .  $natija;
    }
}
