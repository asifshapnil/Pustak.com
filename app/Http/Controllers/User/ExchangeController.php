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
    public function storeExchange(Request $request)
    {
        //dd($request->all());
        $exchange = new Exchange();
        $exchange->from_id = Auth::user()->id;
        $exchange->to_id = $request->userId;
        $exchange->user_books_detail_id = $request->bookId;
        $exchange->status = 0;

        $exchange->save();

        foreach($request->exchangableBookId as $key => $exchangableBookId){
            $exchangeDetails = new ExchangeDetails();
            $exchangeDetails->exchange_id = $exchange->id;
            $exchangeDetails->user_books_detail_id = $exchangableBookId;
            $exchangeDetails->qty = $request->get('qty_'.$exchangableBookId);
            $exchangeDetails->save();
        }
        return redirect()->back()->with('requested','requested');
    }

    public function storeDecission(Request $request){
        $eDtails = Exchange::where('id', $request->exchange_id)->first();
        $eDtails->status = 1;
        $eDtails->save();

        foreach($eDtails->exchangeDetail as $eDetail){
            $userBookOffer = UserBooksDetail::where('id', $eDetail->user_books_detail_id)->first();
            $userBookOffer->status = 2;
            $userBookOffer->save();
        }
        $delete_other_exchange_offers_on_this_book = Exchange::where('user_books_detail_id', $eDtails->user_books_detail_id)
                                                     ->where('status', '!=', 1)
                                                     ->delete();

        $userBook = UserBooksDetail::where('id', $eDtails->user_books_detail_id)->first();
        $userBook->status = 2;
        $userBook->save();
        return redirect()->back();
    }
    public function gotBook(Request $request){
        $eDtails = Exchange::where('id', $request->book)->first();
        $eDtails->status = 2;
        $eDtails->save();

        foreach($eDtails->exchangeDetail as $eDetail){
            $userBookOffer = UserBooksDetail::where('id', $eDetail->user_books_detail_id)->first();
            $userBookOffer->status = 1;
            $userBookOffer->save();
        }


        $userBook = UserBooksDetail::where('id', $eDtails->user_books_detail_id)->first();
        $userBook->status = 1;
        $userBook->save();
        return redirect()->back();
    }
}
