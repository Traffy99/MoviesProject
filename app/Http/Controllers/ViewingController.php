<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Review;
use App\Viewing;
use Carbon\Carbon;
use Illuminate\Http\Request;


class ViewingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $viewings = Viewing::where('time', '>=', Carbon::now('GMT+3'))->where('time', '<', Carbon::tomorrow())->get();
        $movies = Movie::all();
        $movietitle = ['No selection' => ''];
        $viewingres = [];
        if(auth()->user()) {
            foreach ($viewings as $viewing) {
                foreach ($viewing->reservations as $reservation) {
                    if ($reservation->user_id == auth()->user()->id) $viewingres[] = $reservation->viewing_id;
                }
            }
        }
        foreach ($movies as $movie) {
            $movietitle [$movie->id ] = $movie->title;
        }
        return view('viewings', ['viewings'=>$viewings, 'time'=>Carbon::today(), 'moviestitles'=>$movietitle, 'viewingres'=>$viewingres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function filterViewings(Request $request)
    {
        $rules = array(
            'date' => 'nullable|date|after_or_equal:today',
        );
        $this->validate($request, $rules);
        $movies = Movie::all();
        $movietitle = ['No selection' => ''];
        foreach ($movies as $movie) {
            $movietitle [$movie->id ] = $movie->title;
        }

        $viewings=Viewing::where('id', '>', 0);


        if ($request['date'])
            $viewings= $viewings -> where('time', '>=', $request['date'])->where('time', '>=', Carbon::now('GMT+3'))->where('time', '<', Carbon::parse($request['date'])->addDay()->format('y-m-d'));

        if($request['movie'] !== 'No selection')
            $viewings= $viewings -> where('movie_id', '=', $request['movie'])->where('time', '>=', Carbon::now('GMT+3'));

        $viewings = $viewings->get();
        $viewingres = [];
        if(auth()->user()) {
            foreach ($viewings as $viewing) {
                foreach ($viewing->reservations as $reservation) {
                    if ($reservation->user_id == auth()->user()->id) $viewingres[] = $reservation->viewing_id;
                }
            }
        }



        return view('viewings', ['viewings'=>$viewings, 'time'=>$request['date'], 'moviestitles'=>$movietitle, 'viewingres'=>$viewingres]);

    }
}
