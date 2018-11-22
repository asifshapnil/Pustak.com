<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UserBooksDetail;
use App\Model\Book;
use App\Model\Category;
use App\Model\Writer;
use App\Model\BookImage;
use App\Model\Exchange;
use App\Model\ExchangeDetails;
use App\User;
use App\Model\Profile;


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
        $book_data[$i][2] = Exchange::where('user_books_detail_id', $userBook->id)->where('status', 0)->count();
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

    public function get_book_requests(Request $request){
      $getUser = Exchange::where('to_id', Auth::user()->id)->where('status', '0')->get();
      $book_data = array();
      $i = 0;
      foreach($getUser as $book_id){
        $book_data[$i][0] = UserBooksDetail::Join('books', 'userbooksdetails.book_id', '=', 'books.id')
        ->join('categories', 'categories.id', '=', 'books.category_id')
        ->join('writers', 'writers.id', '=', 'books.writer_id')
        ->select('userbooksdetails.*', 'books.title', 'categories.category_name', 'writers.writers_name' )
        ->where('userbooksdetails.id', '=', $book_id->user_books_detail_id)
        ->first();
        $book_data[$i][1] = BookImage::where('user_books_detail_id', $book_id->user_books_detail_id)->get();
        $getImage = $book_data[$i][1];
        foreach($getImage as $key => $image){
          if($key == 1){
            $coverImage = '';
            $coverImage = $image->image;
          }
        }
        $book_data[$i][1] = $coverImage;
        $book_data[$i][2] = ExchangeDetails::Join('userbooksdetails', 'userbooksdetails.id', '=', 'exchangeDetails.user_books_detail_id')
                            ->Join('books', 'books.id', '=', 'userbooksdetails.book_id')
                            ->select('userbooksdetails.id', 'books.title', 'exchangeDetails.exchange_id', 'exchangeDetails.user_books_detail_id', 'exchangeDetails.qty')
                            ->where('exchange_id', $book_id->id)->get();

        $i++;
      }

      $data['book'] = $book_data;
      
      return view('users.my-books-requests', $data);
    }

    public function exchangeLog(Request $request){

      $getUser = Exchange::where('from_id', Auth::user()->id)->where('status', '1')->get();
      $book_data = array();
      $i = 0;
      foreach($getUser as $book_id){
        $book_data[$i][0] = UserBooksDetail::Join('books', 'userbooksdetails.book_id', '=', 'books.id')
        ->join('categories', 'categories.id', '=', 'books.category_id')
        ->join('writers', 'writers.id', '=', 'books.writer_id')
        ->select('userbooksdetails.*', 'books.title', 'categories.category_name', 'writers.writers_name' )
        ->where('userbooksdetails.id', '=', $book_id->user_books_detail_id)
        ->first();
        $book_data[$i][1] = BookImage::where('user_books_detail_id', $book_id->user_books_detail_id)->get();
        $getImage = $book_data[$i][1];
        foreach($getImage as $key => $image){
          if($key == 1){
            $coverImage = '';
            $coverImage = $image->image;
          }
        }
        $book_data[$i][1] = $coverImage;
        $book_data[$i][2] = ExchangeDetails::Join('userbooksdetails', 'userbooksdetails.id', '=', 'exchangeDetails.user_books_detail_id')
                            ->Join('books', 'books.id', '=', 'userbooksdetails.book_id')
                            ->select('userbooksdetails.id', 'books.title', 'exchangeDetails.exchange_id', 'exchangeDetails.user_books_detail_id', 'exchangeDetails.qty')
                            ->where('exchange_id', $book_id->id)->get();

        $i++;
      }

      $data['book'] = $book_data;
      return view('users.my-exchange-log', $data);
      

    }

    public function bookOnExchange(Request $request){
      $getUser = Exchange::where('to_id', Auth::user()->id)->where('status', '1')->get();
      $book_data = array();
      $i = 0;
      foreach($getUser as $book_id){
        $book_data[$i][0] = UserBooksDetail::Join('books', 'userbooksdetails.book_id', '=', 'books.id')
        ->join('categories', 'categories.id', '=', 'books.category_id')
        ->join('writers', 'writers.id', '=', 'books.writer_id')
        ->select('userbooksdetails.*', 'books.title', 'categories.category_name', 'writers.writers_name' )
        ->where('userbooksdetails.id', '=', $book_id->user_books_detail_id)
        ->first();

        $book_data[$i][1] = BookImage::where('user_books_detail_id', $book_id->user_books_detail_id)->get();
        $getImage = $book_data[$i][1];
        foreach($getImage as $key => $image){
          if($key == 1){
            $coverImage = '';
            $coverImage = $image->image;
          }
        }
        if(isset($coverImage)){

          $book_data[$i][1] = $coverImage;
        }
        $book_data[$i][2] = ExchangeDetails::Join('userbooksdetails', 'userbooksdetails.id', '=', 'exchangeDetails.user_books_detail_id')
                            ->Join('books', 'books.id', '=', 'userbooksdetails.book_id')
                            ->select('userbooksdetails.id', 'books.title', 'exchangeDetails.exchange_id', 'exchangeDetails.user_books_detail_id', 'exchangeDetails.qty')
                            ->where('exchange_id', $book_id->id)->get();
        $book_data[$i][3] = User::Join('profile', 'users.id', '=', 'profile.user_id')
                            ->where('users.id', '=',  $book_id->from_id)->first();
        

        $i++;
      }
      $data['book'] = $book_data;
      return view('users.my-book-on-exchange', $data);
    }
}
