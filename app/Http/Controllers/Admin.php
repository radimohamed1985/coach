<?php

namespace App\Http\Controllers;

use App\Models\coach;
use App\Models\sport;
use Faker\Extension\Extension;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index(){
        $sports =sport::get();
        return view('addCoach',get_defined_vars());
    }
    public function addCoach(Request $request){
       $imagename=time().'_'.$_FILES['image']['name'];
       $image_path = public_path('image');
       $request->image->move($image_path,$imagename);
        coach::create([
            'name'=>$request->name,
            'city'=>$request->city,
            'sport_id'=>$request->sport_id,
            'image'=>$imagename
        ]);
        return redirect()->back();

    }
}
