@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <h4 class="list-group-item list-group-item-primary">{{__('messages.write_review')}}{{$movie->title}}</h4>
                    <div class="list-group-item">
                        {{ Form::open(['action' => 'ReviewController@store', 'class' => 'form-horizontal']) }}
                        {{ Form::hidden('check', '', ['class' => 'form-control'.($errors->has('check') ? ' is-invalid' : '')]) }}
                        {{ Form::hidden('movie', $movie->id )}}

                        <div class="form-group row justify-content-center">
                            {{ Form::textArea('text', '', ['style'=>'height:100px; width: 60%', 'class' => 'form-control resizable-textarea '.($errors->has('text') ? ' is-invalid' : '')]) }}

                        </div>

                        @if ($errors->has('text'))
                            <div class=" form-group row text-danger justify-content-center ">
                                <strong class="align-self-center ">{{ $errors->first('text') }}</strong>
                            </div>
                        @endif


                        <div class="form-group row justify-content-center">
                            {{ Form::submit(__('messages.add_review'), ['class' => 'btn btn-light']) }}
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

