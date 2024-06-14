<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){    
        return view('Auth.partials.login');
    }
    public function register(){
        return view('Auth.partials.register');
    }
    public function registerAuth(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
        ]);
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            
        ]);
        $user->save();
        if ($user->save()) {
            return redirect()->route('login');
        }else {
            return redirect()->back();
        }
    }
    public function loginAuth(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('email','=', $request->email)->first();
        if(!$user){
                return back()->with('fail','You have error email .');
            }else{
                if(Hash::check($request->password, $user->password)){
                    $request->Session()->put('loginID', $user->id);
                    return view('home');
            }else{
                return back();
            }
        }
    }
    public function home(){
        $data =array();
        if(Session()->has('loginID')){
            $data = User::where('id','=',Session()->get('loginID'))->first();
        }
        return view('home',compact('data'));
    }
    public function logout(){
        if(Session() ->has('loginID')) {
            Session()->pull('loginID');
        }
        return redirect()->route('login');
    }
}
