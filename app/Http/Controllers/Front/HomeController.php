<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
      return view('front.home');
    }

    public function bookDetails(Request $request){
      if ($request->id == 1) {
        return view('front.bookDetails');
      }else {
        return 'noting found';
      }
    }


}
