<?php

namespace App\Http\Controllers;
use App\Models\Photos;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    //
    public function index(Request $request){
        $photo = Photo();
        $imagePath = null;
        if($request->hasFile('photo')){
          $imagePath =  $request->file('photo')->store('Imags','public');
        }
        $photo->photo = $imagePath;
        $photo->save();
        return redirect('/');
    }
    public function show(){
       $photo = Photos::all();
       return view('Photo.add',compact('photo'));
    }
 
}
