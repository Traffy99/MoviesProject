@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card justify-content-center" style="display: flex; flex-direction: row;">
                    <div style=" padding: 40px">
                        <form action="{{ action('MovieController@store') }}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <h6 class="col-form-label text-md-center" style="vertical-align: center">{{__('messages.title')}}</h6>
                                    </div>
                                    <div class="col-md-8">
                                        <input id="title"  type="text" class="form-control  @error('title') is-invalid @enderror" name="title" >

                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <h6 class="col-form-label text-md-center" style="vertical-align: center">{{__('messages.length')}}</h6>
                                    </div>
                                    <div class="col-md-8">
                                        <input id="length"  type="text" class="form-control  @error('length') is-invalid @enderror" name="length">

                                        @error('length')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <h6 class="col-form-label text-md-center" style="vertical-align: center">{{__('messages.url')}}</h6>
                                    </div>
                                    <div class="col-md-8">
                                        <input id="url" type="text" class="form-control  @error('url') is-invalid @enderror" name="url">

                                        @error('url')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-8 align-items-center">


                                    <button style="margin-top: 50px" type="submit" class="btn btn-light">{{__('messages.add_movie')}}</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

