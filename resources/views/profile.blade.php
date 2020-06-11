@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card" style="display: flex; flex-direction: row;">
                    <div style="width: 40%; padding: 60px" class="border-right">
                            @csrf
                            @if (auth()->user()->getImageAttribute())<img src="{{ asset(auth()->user()->getImageAttribute())}}" style="width: 100px; height: 100px; border-radius: 50%">
                            @else <img src="{{ asset('storage/uploads/images/default_avatar.jpg')}}" style="width: 100px; height: 100px; border-radius: 50%">
                            @endif
                        <h2 style="margin-top: 20px">{{auth()->user()->name}}</h2>
                        <h6>{{__('messages.email')}} {{auth()->user()->email}}</h6>
                        <a style="margin-bottom: 20px; margin-right: 10px; margin-left: 20px" class="btn btn-light" href="{{ action('ProfileController@edit', auth()->user()->id) }}">{{__('messages.edit_profile')}}</a>
                    </div>

                    <div style="padding-top: 40px; padding-left: 50px">
                    <h2 style="padding-top: 50px">{{__('messages.activereservations')}}</h2>
                    @foreach($reservations as $reservation)
                        @if($reservation->viewing->time >= Carbon\Carbon::now('GMT+3'))
                            <div class="card-body {{$loop->last? "": "border-bottom"}} ">

                                <div style="display: inline-block">
                                    <a href="{{ action('MovieController@show', $reservation->viewing->movie->id)}}">
                                        <h4>{{$reservation->viewing->movie->title}}</h4>
                                        <h6>{{Carbon\Carbon::parse($reservation->viewing->time)->format('d.m.y H:i')}}</h6>
                                    </a>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

