<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Writer;
use App\Model\UserBooksDetail;
use App\Model\Book;
use App\Model\BookImage;
use App\Model\Rating;

use Image;
use Auth;



class BookController extends Controller
{
    public function addNew(){
      $data['category'] = Category::all();
      return view('users.newBook', $data);
    }
    public function getBooks(Request $request){
      $query = $request->book;
      $getBook = Book::where('title', 'LIKE', '%' .$query. '%')->get();
      return $getBook;
    }
    public function getBooksInfo(Request $request){
      $data['bookInfo'] = Book::Join('categories', 'categories.id', '=', 'books.category_id' )
                    ->Join('writers', 'writers.id', '=', 'books.writer_id')
                    ->select('categories.category_name', 'writers.writers_name', 'books.title')
                    ->first();
      return view('users.newBook', $data);
    }
    public function storeBook(Request $request){
      $userBook = new UserBooksDetail();
      $userBook->user_id = Auth::user()->id;
      $userBook->book_id = $request->title;
      $userBook->publisher = $request->publisher;
      $userBook->publishing_year = $request->publishing_year;
      $userBook->isbn_no = $request->isbn;
      $userBook->description = $request->description;
      $userBook->condition = $request->condition_to_exchange;
      $userBook->status = 1;
      $userBook->is_delete = 0;


      $userBook->summery = $request->summery;
      $userBook->why_from_me = $request->why_from_me;
      $userBook->save();
      
      
      foreach ($request->image as $image) {
        if ($request->hasFile('image')) {

          $filename = time() . "." . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          $img = Image::make($image);
          $img->save($location );

          $file = new BookImage;
          // $file->user_email = Auth::user()->email;
          $file->user_books_detail_id = $userBook->id;
          $file->image = $filename;
          $file->save();

        }
      }
  

      return redirect()->back()->with('success', 'A new book added');
    }

    public function showEditPage(Request $request, $title, $id){
      $data['details'] = UserBooksDetail::Join('books', 'userbooksdetails.book_id', '=', 'books.id')
      ->join('categories', 'categories.id', '=', 'books.category_id')
      ->join('writers', 'writers.id', '=', 'books.writer_id')
      ->select('userbooksdetails.*', 'books.title', 'categories.category_name', 'writers.writers_name' )
      ->where('userbooksdetails.id', '=', $request->id)
      ->first();
      return view('users.editBook', $data);
    }

    public function storeEditBook(Request $request){
      $userBook = UserBooksDetail::where('id', $request->id)->first();
      $userBook->user_id = Auth::user()->id;
      $userBook->book_id = $request->title;
      $userBook->publisher = $request->publisher;
      $userBook->publishing_year = $request->publishing_year;
      $userBook->isbn_no = $request->isbn;
      $userBook->description = $request->description;
      $userBook->condition = $request->condition_to_exchange;
      $userBook->status = 1;
      $userBook->is_delete = 0;


      $userBook->summery = $request->summery;
      $userBook->why_from_me = $request->why_from_me;
      $userBook->save();
      
      
      if($request->image){
        foreach ($request->image as $image) {
          if ($request->hasFile('image')) {
  
            $filename = time() . "." . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            $img = Image::make($image);
            $img->save($location );
  
            $file = new BookImage;
            // $file->user_email = Auth::user()->email;
            $file->user_books_detail_id = $userBook->id;
            $file->image = $filename;
            $file->save();
  
          }
        }
      }
  

      return redirect()->back()->with('success', 'Book updated');
    }

    public function delete(Request $request){
      $getBook = UserBooksDetail::where('id', $request->book)->first();
      $getBook->status = 0;
      $getBook->save();
      // $getImage = BookImage::where('user_books_detail_id', $request->book)->first();
      
      return redirect()->back();

    }
    
    public function storeRating(Request $request){
      $checkRating = Rating::where('user_id', Auth::user()->id)->where('user_books_detail_id', $request->bookId)->first();

      if (empty($checkRating)) {
  
        $rating = new Rating();
        $rating->user_id = Auth::user()->id;
        $rating->user_books_detail_id = $request->bookId;
        $rating->ratingValue = $request->rateValue;

        $rating->save();
      }else{

        $checkRating->ratingValue = $request->rateValue;
        $checkRating->save();
      }
      return redirect()->route('exchange-log');
        
    }
}
