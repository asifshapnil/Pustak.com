<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Book;


class BookController extends Controller
{
    public function addNew(){
      $data['category'] = Category::all();
      return view('users.newBook', $data)->with('finish', '2');
    }
    public function storeBook(Request $request){
      return 'hello';
    }
}
