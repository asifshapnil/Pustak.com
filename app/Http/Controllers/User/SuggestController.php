<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Model\Suggestion;

class SuggestController extends Controller
{
    public function storeSuggestion(Request $request){
        
        foreach ($request->suggest_id as $suggest_id) {
            $suggest = new Suggestion();
            $suggest->suggest_id = $suggest_id;
            $suggest->user_books_detail_id = $request->book_id;
            $suggest->suggested_by = Auth::user()->id;

            $suggest->save();
        }

        return redirect()->route('user-my-page');
    }
}
