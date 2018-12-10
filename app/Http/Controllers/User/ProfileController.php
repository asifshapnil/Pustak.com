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
use App\Model\Rating;
use App\Model\Contact;




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
      $data['profile'] = User::Join('profile', 'users.id', '=', 'profile.user_id')
      ->where('users.id', '=',  Auth::user()->id)->first();

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
      $data['tabActive'] = 'index';
    
     
      return view('users.myProfile', $data);
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
        // dd($book_id->id);
        $book_data[$i][2] = ExchangeDetails::Join('userbooksdetails', 'userbooksdetails.id', '=', 'exchangeDetails.user_books_detail_id')
                            ->Join('books', 'books.id', '=', 'userbooksdetails.book_id')
                            ->Join('exchange', 'exchange.id', '=', 'exchangeDetails.exchange_id')
                            ->select('userbooksdetails.id', 'books.title', 'exchangeDetails.exchange_id', 'exchangeDetails.user_books_detail_id', 'exchangeDetails.qty', 'exchange.from_id', 'exchange.to_id')
                            ->where('exchange_id', $book_id->id)->get();

        $i++;
      }
      // dd($book_data);
      $data['book'] = $book_data;
      $data['profile'] = User::Join('profile', 'users.id', '=', 'profile.user_id')
      ->where('users.id', '=',  Auth::user()->id)->first();

      $data['tabActive'] = 'myBookRequest';

      
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
        $book_data[$i][3] = User::Join('profile', 'users.id', '=', 'profile.user_id')
        ->where('users.id', '=',  $book_id->to_id)->first();

        $getRating = Rating::where('user_id', Auth::user()->id)
                            ->where('user_books_detail_id', $book_id->user_books_detail_id)
                            ->first();
        if (empty($getRating)) {
          $book_data[$i][4] = 0;
        }else{
          $book_data[$i][4] = $getRating;

        }

        $checkContact = Contact::where('contact_id', Auth::user()->id)
        ->where('user_id', $book_id->to_id)
        ->where('status', 0 )->first();
          if(!empty($checkContact)){
          $book_data[$i][5] = 'accept';
          }else{
            $checkContactReq = Contact::where('user_id', Auth::user()->id)
                    ->where('contact_id', $book_id->to_id)
                    ->where('status', 0 )->first();
            if (!empty($checkContactReq)) {
            $book_data[$i][5] = 'ReqSent';
            }else{
              $checkContactReq1 = Contact::where('user_id', Auth::user()->id)
                    ->where('contact_id', $book_id->to_id)
                    ->where('status', 1 )->first();
              $checkContactReq2 = Contact::where('contact_id', Auth::user()->id)
                    ->where('user_id', $book_id->to_id)
                    ->where('status', 1 )->first();
              if(!empty($checkContactReq1) || !empty($checkContactReq2)){
                $book_data[$i][5] = 'contact';
              }else{
                $book_data[$i][5] = 'sendReq';

              }
            }
        }
        $i++;
      }
      // dd($getRating);
      
      $data['book'] = $book_data;
      $data['profile'] = User::Join('profile', 'users.id', '=', 'profile.user_id')
      ->where('users.id', '=',  Auth::user()->id)->first();

      $data['tabActive'] = 'myExchangeLog';

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
        
        $book_data[$i][4] = $book_id->id;
        $checkContact = Contact::where('contact_id', Auth::user()->id)
                        ->where('user_id', $book_id->from_id)
                        ->where('status', 0 )->first();
        if(!empty($checkContact)){
          $book_data[$i][5] = 'accept';
        }else{
          $checkContactReq = Contact::where('user_id', Auth::user()->id)
                        ->where('contact_id', $book_id->from_id)
                        ->where('status', 0 )->first();
          if (!empty($checkContactReq)) {
            $book_data[$i][5] = 'ReqSent';
          }else{
            $checkContactReq1 = Contact::where('user_id', Auth::user()->id)
                  ->where('contact_id', $book_id->from_id)
                  ->where('status', 1 )->first();
            $checkContactReq2 = Contact::where('contact_id', Auth::user()->id)
                  ->where('user_id', $book_id->from_id)
                  ->where('status', 1 )->first();
            if(!empty($checkContactReq1) || !empty($checkContactReq2)){
              $book_data[$i][5] = 'contact';
            }else{
              $book_data[$i][5] = 'sendReq';

            }
          }
        }


        $i++;
      }
      
      $data['book'] = $book_data;
      $data['profile'] = User::Join('profile', 'users.id', '=', 'profile.user_id')
      ->where('users.id', '=',  Auth::user()->id)->first();

      $data['tabActive'] = 'myBookOnExchange';


      return view('users.my-book-on-exchange', $data);
    }

    public function storeProfile(Request $request){
      $profile = Profile::where('user_id', Auth::user()->id)->first();

      $profile->address = $request->address;
      $profile->city = $request->city;
      $profile->district = $request->district;
      $profile->postal_code = $request->postal_code;
      $profile->country = $request->country;
      $profile->phone_no = $request->phone_no;

      if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time() . "." . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        $img = Image::make($image);
        $img->save($location );
        $profile->image = $filename;
      }

      $profile->save();
      return redirect()->back();
    }
}
