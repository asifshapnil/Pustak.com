<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Writer;
use App\Model\UserBooksDetail;
use App\Model\Book;
use App\Model\BookImage;
use App\Model\Exchange;
use App\Model\ExchangeDetails;

use Image;
use Auth;

class ExchangeController extends Controller
{
    public function storeExchange(Request $request){
        $exchange = new Exchange();
        $exchange->from_id = Auth::user()->id;
        $exchange->to_id = $request->userId;
        $exchange->user_books_detail_id = $request->bookId;
        $exchange->status = 0;

        $exchange->save();

        foreach($request->exchangableBookId as $exchangableBookId){
            $exchangeDetails = new ExchangeDetails();
            $exchangeDetails->exchange_id = $exchange->id;
            $exchangeDetails->user_books_detail_id = $exchangableBookId;
            $exchangeDetails->qty = 1;

            $exchangeDetails->save();

        }
        

        return redirect()->back()->with('requested','requested');
    }
    public function storeDecission(Request $request){
        $eDtails = Exchange::where('id', $request->exchange_id)->first();
        $eDtails->status = 1;
        $eDtails->save();

        return redirect()->back();
    }
}
