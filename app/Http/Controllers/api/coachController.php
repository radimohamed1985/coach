<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\apiresponse;
use App\Models\coach;
use Illuminate\Http\Request;

class coachController extends Controller
{
    public function index($id)
    {
        $coaches =coach::where('sport_id','=',$id)->get();
        $res =  apiresponse::collection($coaches);
        return response($res);
    }
    public function allcoach()
    {
        $coaches =coach::get();

        $res =  apiresponse::collection($coaches);
     

        
        return response($res);
    }
}
