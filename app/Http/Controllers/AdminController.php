<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $user["data"] = User::where("role", "=", "user")->get();
        if(Auth::user()->role == "admin"){
            return view("admins.dashboard", $user);
        }
        return redirect()->route("dashboard-user");
    }

    public function edit($id){
        $user["data"] = User::find($id);
        if(Auth::user()->role == "admin"){
            return view("admins.edit-status-role", $user);
        }
        return redirect()->route("dashboard-user");
    }

    public function update(Request $request){
        $validate = $request->validate([
            "status" => "required",
            "role" => "required"
        ]);

        $user = User::find($request->id);
        $user->status = $request->status;
        $user->role = $request->role;
        $user->save();

        return redirect()->route("dashboard-admin");
    }

    public function resetPassword(Request $request){
        $user = User::find($request->id);

        $user->password = Hash::make("password");
        $user->save();

        return redirect()->route("dashboard-admin");
    }
}
