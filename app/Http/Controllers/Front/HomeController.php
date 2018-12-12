<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UserBooksDetail;
use App\Model\Book;
use App\Model\Category;
use App\Model\Writer;
use App\Model\BookImage;
use App\Model\Contact;

use Auth;
use Image;



class HomeController extends Controller
{
    public function index(Request $request){
    //   $data['allBooks'] = UserBooksDetail::paginate(6);
    $allBooks = UserBooksDetail::Join('books', 'userbooksdetails.book_id', '=', 'books.id')
    ->join('categories', 'categories.id', '=', 'books.category_id')
    ->join('writers', 'writers.id', '=', 'books.writer_id')
    ->select('userbooksdetails.*', 'books.title', 'categories.category_name', 'writers.writers_name' )
    ->where('status', '=', 1);

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
        if (Auth::check()) {
            $data['my_books'] = UserBooksDetail::Join('books', 'userbooksdetails.book_id', '=', 'books.id')
                                ->join('categories', 'categories.id', '=', 'books.category_id')
                                ->join('writers', 'writers.id', '=', 'books.writer_id')
                                ->select('userbooksdetails.*', 'books.title', 'categories.category_name', 'writers.writers_name' )
                                ->where('userbooksdetails.user_id', '=', Auth::user()->id)
                                ->get();  
            
            
            $data['contacts'] = Contact::Join('users', 'users.id', '=', 'contacts.contact_id')
                                ->Join('profile', 'profile.user_id', '=', 'users.id')
                                ->select('profile.user_id', 'profile.image', 'users.fname', 'users.lname', 'users.email')
                                ->where('contacts.user_id', '=', Auth::user()->id)
                                ->get();
        }
        if (isset($request->exchange_id)) {
            $data['exchangeId'] = $request->exchange_id;
        }

        $getRating = UserBooksDetail::Join('ratings', 'ratings.user_books_detail_id', '=', 'userbooksdetails.id')
                    ->where('userbooksdetails.id', '=', $request->id)->get();

        if (!$getRating->isEmpty()) {
            $rateCount  = $getRating->count();
            $totalRate = 0;
             foreach ($getRating as $rate) {
                 $totalRate += $rate->ratingValue;
             }
            
             $data['avg'] = ceil($totalRate / $rateCount);
        }
        //  dd($avg);
        return view('front.bookDetails', $data);
            
    }

      
      


}
