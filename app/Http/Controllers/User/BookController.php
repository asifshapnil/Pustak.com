<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Writer;
use App\Model\UserBooksDetail;
use App\Model\Book;
use App\Model\BookImage;
use Image;
use Auth;



class BookController extends Controller
{
    public function addNew(){
      $data['category'] = Category::all();
      return view('users.newBook', $data)->with('finish', '2');
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
}
