<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UserBooksDetail;
use App\Model\Book;
use App\Model\Category;
use App\Model\Writer;
use App\Model\BookImage;
use Auth;
use Image;

class ProfileController extends Controller
{
    public function index(){
      $data['details'] = UserBooksDetail::Join('books', 'userbooksdetails.book_id', '=', 'books.id')
      ->join('categories', 'categories.id', '=', 'books.category_id')
      ->join('writers', 'writers.id', '=', 'books.writer_id')
      ->select('userbooksdetails.*', 'books.title', 'categories.category_name', 'writers.writers_name' )
      ->where('userbooksdetails.user_id', '=', Auth::user()->id)
      ->get();

      $book_data = array();
      $i = 0;
      $getImage = '';
      foreach($data['details'] as $userBook){
        $book_data[$i][0] = $userBook;
        $book_data[$i][1] = BookImage::where('user_books_detail_id', $userBook->id)->get();
        $getImage = $book_data[$i][1];
        foreach($getImage as $key => $image){
          if($key == 1){
            $coverImage = '';
            $coverImage = $image->image;
          }
        }
        $book_data[$i][1] = $coverImage;
        $i++;
      }
      $data['book_data'] = $book_data;
    
     
      return view('users.myProfile', $data);
    }

    public function get_book_by_category(Request $request){
      $data['allBooks'] = UserBooksDetail::Join('books', 'userbooksdetails.book_id', '=', 'books.id')
      ->join('categories', 'categories.id', '=', 'books.category_id')
      ->join('writers', 'writers.id', '=', 'books.writer_id')
      ->select('userbooksdetails.*', 'books.title', 'categories.category_name', 'writers.writers_name' )
      ->where('categories.category_name', '=', $request->cat)
      ->paginate(6);

      return view('front.home', $data);

    }
}
