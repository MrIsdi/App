<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit(){
        return view("users.edit-profile");
    }

    public function update(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'nobp' => 'required',
            'department' => 'required',
            'placeBirth' => 'required',
            'dateBirth' => 'required',
            'foto' => 'required',
            'foto.*' => 'mimes:jpg,jpeg,png|max:2000'
        ]);

        $user = User::find($request->id);
        $user->name = $request->name;
        $user->nobp = $request->nobp;
        $user->department = $request->department;
        $user->placeBirth = $request->placeBirth;
        $user->dateBirth = $request->dateBirth;
        if($request->hasFile('foto')){
            $foto = $request->id.'-'.$request->nobp.'-'.str_replace(' ','-',$request->file('foto')->getClientOriginalName());
            $request->file('foto')->move(public_path('img'), $foto);
            $user->foto = $foto;
        }
        $user->save();

        return redirect()->route("profile-user");
    }
}
