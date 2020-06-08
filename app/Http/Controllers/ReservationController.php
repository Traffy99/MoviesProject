<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Viewing;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('admin')->only(['']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $success = false;
        $reservations = Reservation::where('user_id', auth()->user()->id)->where('viewing_id', $request['viewing_id'])->get();
        if(count($reservations) < 1) {
            $reservation = new Reservation();
            $reservation->user_id = auth()->user()->id;
            $reservation->viewing_id = $request['viewing_id'];
            $reservation->save();
            $success = true;
        }
        $viewing = Viewing::findorfail($request['viewing_id']);
        $viewing -> reserved_seats_count = $viewing -> reserved_seats_count +1;
        $viewing->save();


        return response()->json(['success' => $success, 'viewing_id'=>$request['viewing_id'], 'seats'=>$viewing -> reserved_seats_count], 200);
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
}
