@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card"style="display: flex; flex-direction: row;">
                    <div style="padding: 50px 20px 50px 50px;">
                        <img src="{{$viewing->movie->cover}}" alt="image" width="300">
                    </div>
                    <div class="card-body" style="padding-top: 50px">
                        <h1 class="card-text">{{$viewing->movie->title}}</h1>
                        <p class="card-text">{{__('messages.length')}} {{$viewing->movie->length}} {{__('messages.minutes')}}</p>
                        <h2 style="padding-top: 50px">{{__('messages.reviews')}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

