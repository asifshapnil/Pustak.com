<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UserBooksDetail;

class HomeController extends Controller
{
    public function index(){
      $data['allBooks'] = UserBooksDetail::paginate(6);
      return view('front.home', $data);
    }

    public function bookDetails(Request $request){
      $data['details'] = UserBooksDetail::where('id', $request->id)->with('image')->first();
      return view('front.bookDetails', $data);
      
    }


}
