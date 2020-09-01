<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user){

        return view('profiles.show',compact('user'));
    }

    public function edit(User $user){
        if($user->isNot(auth()->user())){
            abort(403);}

        return view('profiles.edit',compact('user'));
    }

    public function update(User $user){
        $attr=request()->validate(
            [
                'username'=>['string','required','max:225','min:4','alpha_dash',Rule::unique('users')->ignore($user)],
                'name'=>['string','required','max:225','min:3'],
                'email'=>['string','required','email','max:225',Rule::unique('users')->ignore($user)],
            

            ]
            );
            $user->update($attr);
            return redirect('/tweets');

    }
}

