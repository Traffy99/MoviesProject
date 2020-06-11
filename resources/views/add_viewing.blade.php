@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card justify-content-center" style="vertical-align:  center">
                    <h4 style="padding: 15px 20px" class="list-group-item list-group-item-primary">{{__('messages.add_viewing2')}} {{$movie->title}}</h4>
                    <div style=" padding: 40px">
                        <form action="{{ route('viewings.store') }}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <h6 class="col-form-label text-md-center" style="vertical-align: center">{{__('messages.time')}}</h6>
                                    </div>
                                    <div class="col-md-8">
                                        <input id="time"  type="datetime-local" class="form-control  @error('time') is-invalid @enderror" name="time" >

                                        @error('time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <h6 class="col-form-label text-md-center" style="vertical-align: center">{{__('messages.price')}}</h6>
                                    </div>
                                    <div class="col-md-8">
                                        <input id="price"  type="text" class="form-control  @error('price') is-invalid @enderror" name="price">

                                        @error('price')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <input id="movie_id" value="{{$movie->id}}" type="hidden" name="movie_id">


                                <div class="col-md-8 align-items-center">


                                    <button style="margin-top: 50px" type="submit" class="btn btn-light">{{__('messages.add_viewing')}}</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

