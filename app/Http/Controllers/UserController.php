<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view("users.dashboard");
    }

    public function profile(){
        return view("users.profile");
    }

    public function event(){
        $data["event"] = Event::all();
        return view("users.event", $data);
    }
}
