<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;

class BookController extends Controller
{
    public function addNew(){
      $data['category'] = Category::all();
      return view('users.newBook', $data)->with('finish', '2');
    }
}
