<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Password;
use Auth;

class AuthChangePasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showChangeForm( )
    {
        return view('auth.passwords.change');
    }

    public function changePassword(Request $req)
    {
        $this->validate($req,[
            'oldpassword'=>'required', // для валидации
            'password'=>'required|confirmed',

        ]);
        $hashedPassword=Auth::user()->password;
        if(Hash::check($req->oldpassword,$hashedPassword)){
            $user=User::find(Auth::id());
            $user->password=Hash::make($req->password);
            $user->save();
            Auth::logout();
            return redirect()->route('profile')->with('errorMsg',"Current password  is changed");
        } else {

            return redirect()->back()->with('errorMsg',"Current password  is invalid");
        }

        }



}
