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
                                <p>{{$viewing->movie->title}}{{$viewing->movie->length}}{{$viewing->time}}</p>
                            @endforeach
                        @else <p>{{__('messages.noviewingstoday')}}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
