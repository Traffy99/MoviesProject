<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Review;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->only(['indexAdmin', 'orderDone']);

    }
    public function create($movie)
    {
        $movie = Movie::findorfail($movie);
        return view('add_review', ['movie'=>$movie]);
    }

    public function store(Request $request)
    {
        $rules = array(
            'text' => 'required',
        );
        $this->validate($request, $rules, $this->messages());

        $review = new Review();
        $review->user_id = auth()->user()->id;
        $review->movie_id = $request['movie'];
        $review->review_text = $request['text'];
        $review->time = Carbon::now('GMT+3');
        $review->save();

        $movie = Movie::findorfail($request['movie']);


        return redirect()->route('movies.show', $movie);
    }

    private function messages()
    {
        return [
            'text.required' => __('messages.review_needed')
        ];
    }

}
