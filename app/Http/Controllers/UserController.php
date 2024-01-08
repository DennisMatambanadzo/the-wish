<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //

    public function show()
    {
        return view('chime.index');
    }

    public function login()
    {
        return view('chime.login');
    }
    public function register()
    {
        return view('chime.register');
    }

    public function store(Request $request){
//        dd($request);
        $formFields = $request->validate([
                'name' =>['required','min:3'],
//                'lastname' =>['required','min:3'],
                'email' =>['required','min:3',Rule::unique('users','email')],
                'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);
        return redirect('/chime/');
    }
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' =>'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            $request -> session()->regenerate();

            return redirect('/chime');
        }
        return redirect('/chime/login');
    }
}
