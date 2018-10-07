<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friend;

class AboutController extends Controller
{

    public function abouts(){
        return view('abouts.index');
    }

    public function contact(){
        return view('abouts.contact');
    }

    public function termsconditions(){
        return view('abouts.termsconditions');
    }

    public function acknowledgement(){
        $friends = Friend::all();
        return view('abouts.acknowledgement',compact('friends'));
    }

    public function location(){
        return view('abouts.address');
    }

}
