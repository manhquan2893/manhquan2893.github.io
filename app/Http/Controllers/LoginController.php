<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
/*use Illuminate\Foundation\Auth\AuthenticatesUsers;*/
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
     /*use AuthenticatesUsers;
     protected $username='username';
	 protected $redirectTo = '/dashboard';
	 protected $guard='web';*/

	 public function getLogin()
	 {
	 	return view('login');
	 }
	 public function postLogin(Request $request)
	 {
	 	$username=$request->username;
	 	$password=$request->password;
	 	$auth=Auth::attempt(['username'=>$username,'password'=>$password,'active'=>1]);
	 	if($auth)
	 	{
	 		return redirect('dashboard');
	 	}
		return redirect('login');	 	
	 }
	 public function getLogout()
	 {
	 	Auth::logout();
	 	return redirect('login');
	 }
	 public function test($route)
	 {
	 	$actions= $route->getAction();
	 	dd($action);
	 }
}
