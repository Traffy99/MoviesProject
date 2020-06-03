@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{__('messages.viewingstoday')}}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if(count($viewings))
                            @foreach($viewings as $viewing)

                               <a href="{{ url('viewings', $viewing['id']) }}">
                                   <div class="card-body border-bottom ">
                                       <div style="display: inline-block; padding-right: 30px">
                                           <img src="{{$viewing->movie->cover}}" alt="image" width="100">
                                       </div>
                                       <div style="display: inline-block">
                                           <p>{{ Carbon\Carbon::parse($viewing->time)->format('H:i')}}</p>
                                           <h3 >{{$viewing->movie->title}}</h3>
                                       </div>
                                   </div>
                               </a>

                            @endforeach
                        @else <p>{{__('messages.noviewingstoday')}}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

