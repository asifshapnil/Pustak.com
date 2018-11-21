<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;


class AuthController extends Controller
{
  public function signUp(){
    return view('front.signUp');
  }

  public function store_signUp(Request $request){

    // return $request;
    $user = New User();

    $user->fname = $request->fname;
    $user->lname = $request->lname;
    $user->email = $request->email;
    $user->password = bcrypt($request->password);

    $user->save();

    return redirect()->route('front-signIn');
}

  public function signIn(Request $request){
    if (isset($request->id)) {
      $data['bookId'] = $request->id;
      return view('front.signIn', $data);
    }
    return view('front.signIn');

  }

  public function store_signIn(Request $request){
    if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember_token'))) {
      return redirect()->back()->with('error', 'Credentials do not match');
    }

    if (isset($request->bookId)) {
      return redirect()->route('front-book-details', ['id'=>$request->bookId]);
    }
    return redirect()->route('user-my-page');
  }

  public function logout(){
    Auth::logout();
    return redirect('/');
  }


}
