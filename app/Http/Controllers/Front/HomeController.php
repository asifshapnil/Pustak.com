<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UserBooksDetail;
use App\Model\Book;
use App\Model\Category;
use App\Model\Writer;
use App\Model\BookImage;



class HomeController extends Controller
{
    public function index(Request $request){
    //   $data['allBooks'] = UserBooksDetail::paginate(6);
    $allBooks = UserBooksDetail::Join('books', 'userbooksdetails.book_id', '=', 'books.id')
    ->join('categories', 'categories.id', '=', 'books.category_id')
    ->join('writers', 'writers.id', '=', 'books.writer_id')
    ->select('userbooksdetails.*', 'books.title', 'categories.category_name', 'writers.writers_name' );

    if(isset($request->cat) || isset($request->writer)){

        if($request->cat){
            $data['allBooks'] = $allBooks->where('categories.category_name', '=', $request->cat)
            ->paginate(6);
        }
        if($request->writer){
            $data['allBooks'] = $allBooks->where('writers.writers_name', '=', $request->writer)
            ->paginate(6);
        }
    }else{
        $data['allBooks'] =   $allBooks->paginate(6);
       
    }

      return view('front.home', $data);
    }

    public function bookDetails(Request $request){
      $data['details'] = UserBooksDetail::Join('books', 'userbooksdetails.book_id', '=', 'books.id')
      ->join('categories', 'categories.id', '=', 'books.category_id')
      ->join('writers', 'writers.id', '=', 'books.writer_id')
      ->select('userbooksdetails.*', 'books.title', 'categories.category_name', 'writers.writers_name' )
      ->where('userbooksdetails.id', '=', $request->id)
      ->first();
      $images = BookImage::where('user_books_detail_id', $request->id)->get();
      
      foreach($images as $key=>$image){
      
          if($key == 0){
              $data['image1'] = '';
              $data['image1']  = $image->image;
          }elseif($key == 1){
              $data['image2'] = '';
              $data['image2'] = $image->image;
          }elseif($key == 2){
              $data['image3'] = '';
              $data['image3'] = $image->image;
          }else{

          }
      
        }
        // return ($data['details']);
      
      return view('front.bookDetails', $data);
      
    }


}
