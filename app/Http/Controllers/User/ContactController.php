<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Model\Contact;
use App\User;


class ContactController extends Controller
{
    public function accept(Request $request){
        $accept =   Contact::where('contact_id', Auth::user()->id)
                    ->where('user_id', $request->id)->first();
        $accept->status = 1;
        $accept->save();
        $setRecurring = new Contact();
        $setRecurring->user_id = Auth::user()->id;
        $setRecurring->contact_id = $request->id;
        $setRecurring->status = 1;
        
        $setRecurring->save();

        return redirect()->route('exchange-log');
    }
    public function sendReq(Request $request){

        $sendReq = new Contact();
        $sendReq->user_id = Auth::user()->id;
        $sendReq->contact_id = $request->id;
        $sendReq->status = 0;

        $sendReq->save();
        return redirect()->route('book-on-exchange');

    }
}
