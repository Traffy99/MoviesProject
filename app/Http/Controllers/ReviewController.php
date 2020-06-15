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

    }
    public function create($movie)
    {
        if(auth()->user()->is_blocked) return redirect()->back();
        $movie = Movie::findorfail($movie);
        return view('add_review', ['movie'=>$movie]);
    }

    public function store(Request $request)
    {
        if(auth()->user()->is_blocked) return redirect()->back();
        $rules = array(
            'text' => 'required|max:1000',
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
    public function edit($id)
    {
        $review = Review::findorfail($id);
        if(auth()->user()->is_blocked || auth()->user()->id != $review->user->id) return redirect()->back();
        return view('edit_review', ['text'=>$review->review_text, 'movie'=>$review->movie, 'review_id'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'text' => 'required|max:1000',
        );
        $this->validate($request, $rules, $this->messages());

        $review = Review::findorfail($id);
        if(auth()->user()->is_blocked || auth()->user()->id != $review->user->id) return redirect()->back();
        $review->review_text = $request['text'];
        //$review->time = Carbon::now('GMT+3');
        $review->save();

        $movie = Movie::findorfail($request['movie']);


        return redirect()->route('movies.show', $movie);
    }
    public function destroy($id)
    {
        $review = Review::findorfail($id);
        $review->delete();
        return redirect()->route('movies.show', $review->movie);

    }

}
