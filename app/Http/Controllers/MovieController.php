<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Review;
use App\Viewing;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies', ['movies' =>$movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()&&auth()->user()->permission_level == 1) {
            return view('add_movie');
        }
        else return redirect()->route('viewings.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(auth()->user()&&auth()->user()->permission_level == 1) {
            $rules = array(
                'title' => 'required|max:100',
                'length' => 'required|integer|min:0',
                'url' => 'required'
            );
            $this->validate($request, $rules);

            $movie = new Movie();
            $movie->title = $request['title'];
            $movie->length = $request['length'];
            $movie->cover = $request['url'];
            $movie->save();

            return redirect()->route('movies.index');
        }
        else return redirect()->route('viewings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::where('id','=', $id)->get()[0];
        $reviews = Review::where('movie_id', '=', $movie->id)->orderBy('created_at', 'desc')->get();
        return view('movie', ['movie'=>$movie, 'reviews'=>$reviews]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
