<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Session\SessionManager;
/**
 * Log the user out of the application.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */

class AuthController extends Controller
{
    public function login()
    {
        return view("login");
    }
    public function registration()
    {
        return view("register");
    }
    public function registerEmploye(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required|email|unique:users',
            'password'=> 'required|confirmed|min:8',

        ]);

        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res)
        {
            return back()->with('success','Zarejestrowano pomyślnie');
        }
        else
        {
            return back()->with('fail','Niezarejestrowano');
        }
    }
    public function loginEmploye(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8',
        ]);
        $user = User::where('email','=',$request->email)->first();
        if ($user)
        {
            if(Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);

                return redirect('dashboard');
            }
            else {
                return back()->with('fail', 'Niepoprawne hasło' );
            }
        }
        else {
            return back()-> with('fail','Ten e-mail nie jest zarejestrowany');
        }

    }
    public function dashboard()
    {
        $data1=$this->sesExist();
        $data = $data1['data'];
        $countOfUsers = User::count();
        return view('dashboard',compact('data','countOfUsers'));

    }
    public function logout(Request $request)
    {
        Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

        return redirect('login');

    }

public function account()
{
    $data1=$this->sesExist();
    $data = $data1['data'];

    return view('account',compact('data'));
}

public function sesExist(){

    $data= array();

    if (Session::has('loginId')) {
        $data = User::where('id', '=', Session::get('loginId'))->first();
    }

    return compact('data');

}
public function add(Request $request)
{
    $data1=$this->sesExist();
    $data = $data1['data'];

    return view('add',compact('data'));
}
}
