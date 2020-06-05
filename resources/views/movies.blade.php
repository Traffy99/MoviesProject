@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{__('messages.allmovies')}}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if(count($movies))
                            @foreach($movies as $movie)


                                   <div class="card-body {{$loop->last? "": "border-bottom"}} ">
                                       <div style="display: inline-block; padding-right: 30px">
                                           <a href="{{ action('MovieController@show', $movie->id)}}">
                                               <img src="{{$movie->cover}}" alt="image" width="100">
                                           </a>
                                       </div>
                                       <div style="display: inline-block">
                                           <a href="{{ action('MovieController@show', $movie->id)}}">
                                               <h3>{{$movie->title}}</h3>
                                           </a>
                                       </div>
                                   </div>


                            @endforeach
                        @else <p>{{__('messages.noviewingstoday')}}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

