@extends('layouts.app')

@section('content')
    <div class="container">
        <div  class="row justify-content-center" >
            {{ Form::open(['action' => 'ViewingController@filterViewings', 'class' => 'form-horizontal']) }}
            <div class="form-group row">
                <div class="form-group row align-items-center">
                    {{ Form::label('date', __('messages.date'), ['class' => 'col-md-4 control-label text-md-right mb-0']) }}
                    <div class="col-md-8">
                        {{ Form::date('date', '', ['class' => 'form-control'.($errors->has('date') ? ' is-invalid' : '')]) }}
                        @if ($errors->has('date'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('date') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row align-items-center">
                    {{ Form::label('movie', __('messages.movie'), ['class' => 'col-md-4 control-label text-md-right mb-0']) }}
                    <div class="col-md-6">

                        {{ Form::select('movie', $moviestitles, ['class' => 'form-control  mb-0'.($errors->has('movie') ? ' is-invalid' : '')]) }}
                        @if ($errors->has('movie'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('movie') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        {{ Form::submit('Search', ['class' => 'btn btn-light']) }}
                    </div>
                </div>
                {{ Form::close() }}
            </div>

        </div>


        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if($time)<div class="card-header">{{__('messages.viewingson')}}{{Carbon\Carbon::parse($time)->format('d.m.y')}}</div>
                    @else($time)<div class="card-header">{{__('messages.viewings')}}</div>
                    @endif


                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if(count($viewings))
                            @foreach($viewings as $viewing)


                                <div class="card-body {{$loop->last? "": "border-bottom"}} ">
                                    <div style="display: inline-block; padding-right: 30px">
                                        <a href="{{ action('MovieController@show', $viewing->movie_id)}}">
                                            <img src="{{$viewing->movie->cover}}" alt="image" width="100">
                                        </a>
                                    </div>
                                    <div style="display: inline-block">
                                        @if($time)<p>{{ Carbon\Carbon::parse($viewing->time)->format('H:i')}}</p>
                                        @else <p>{{ Carbon\Carbon::parse($viewing->time)->format('d.m.y H:i')}}</p>
                                        @endif
                                        <a href="{{ action('MovieController@show', $viewing->movie_id)}}">
                                            <h3>{{$viewing->movie->title}}</h3>
                                        </a>
                                        @if(($viewing->reserved_seats_count)<100)<p class="text-success">{{__('messages.seatsexist')}} {{100-($viewing->reserved_seats_count)}}</p>
                                        @else <p class="text-danger">{{__('messages.noseats')}}</p>
                                        @endif
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

