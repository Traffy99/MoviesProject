@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card" style="display: flex; flex-direction: row;">
                    <div style="padding: 50px 20px 50px 50px;">
                        <img src="{{$movie->cover}}" alt="image" width="300">
                    </div>
                    <div class="card-body" style="padding-top: 50px">
                        <h1 class="card-text">{{$movie->title}}</h1>
                        <p class="card-text">{{__('messages.length')}} {{$movie->length}} {{__('messages.minutes')}}</p>

                        @if(auth()->user()&&auth()->user()->permission_level == 1)<a class="btn-light btn" href="{{ action('ViewingController@createViewing', $movie->id) }}">{{ __('messages.add_viewing') }}</a>@endif

                        <h2 style="padding-top: 50px">{{__('messages.reviews')}}</h2>
                        <a style="margin-bottom: 20px" class="btn btn-light" href="{{ action('ReviewController@create', $movie->id) }}">{{__('messages.add_review')}}</a>

                        @foreach($reviews as $review)
                            <div class="shadow" style="padding: 20px; margin-bottom: 20px">
                                <div style="display: flex; flex-direction: row;">
                                    <h6 style="margin-top: 0.675rem; margin-right: 5px">{{__('messages.author')}}</h6>
                                    <h3>{{$review->user->name}}</h3>
                                </div>
                                <br>
                                <p>{{$review->review_text}}</p>


                                @if(auth()->user()&&$review->user_id == auth()->user()->id)
                                    <div class="row">
                                        <a style="margin-bottom: 20px; margin-right: 10px; margin-left: 20px" class="btn btn-light" href="{{ action('ReviewController@edit', $review->id) }}">{{__('messages.edit_review')}}</a>
                                        {{ Form::open(['action' => ['ReviewController@destroy', $review->id], 'class' => 'form-horizontal', 'method'=>'delete']) }}
                                        {{ Form::submit(__('messages.delete'), ['class' => 'btn btn-light']) }}
                                        {{ Form::close() }}
                                    </div>
                                    @elseif(auth()->user()->permission_level == 1)
                                    <div class="row">
                                        <a style="margin-bottom: 20px; margin-right: 10px; margin-left: 20px" class="btn btn-light" href="{{ action('ReviewController@edit', $review->id) }}">{{__('messages.edit_review')}}</a>
                                        {{ Form::open(['action' => ['ReviewController@destroy', $review->id], 'class' => 'form-horizontal', 'method'=>'delete']) }}
                                        {{ Form::submit(__('messages.delete'), ['class' => 'btn btn-light']) }}
                                        {{ Form::close() }}
                                    </div>
                                @endif
                                <p style="float:right">{{Carbon\Carbon::parse($review->time)->format('d.m.y H:i')}}</p>
                            </div>

                            <br>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

