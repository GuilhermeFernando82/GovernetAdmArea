<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\Base\Users;

class ClienteLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    public function login(Request $request){
        $dados = (['email' => $request->get('email'), 'password' => $request->get('password'),]);
        if((auth()->guard('clientes')->attempt($dados)))
        {
            $id = Auth::guard('clientes')->user()->id;
            $cli = DB::table('clientes')->where('id', $id )->get();
            return view("indexcli", compact('cli'));
            

            //return redirect()->route("cliente.dashboard");
        }else{
            return redirect()->back()->with('alert', 'Email ou senha invalidos!');
        }
    }
    public function logouts(){
        //echo "auth:" . Auth::user();
        Auth::logout();
        return redirect()->route("/user/dashboard"); 
    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function verifica(){
        if(auth()->check()){
            return view('user/contract/list');
        }else{
            return view('user/login');
        }
    }
}
