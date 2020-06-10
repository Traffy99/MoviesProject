@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card justify-content-center" style="display: flex; flex-direction: row;">
                    <div style=" padding: 40px">
                        <form action="{{ action('ProfileController@updateProfile') }}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <h6 class="col-form-label text-md-right" style="vertical-align: center">{{__('messages.editname')}}</h6>
                                    </div>
                                    <div class="col-md-8">
                                        <input id="name" value="{{$name}}" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <h6 class="col-form-label text-md-right">{{__('messages.editpicture')}}</h6>
                                    </div>
                                    <div class="col-md-8">
                                        <input id="profile_picture" type="file" value="{{__('messages.no_file_chosen')}}" class="form-control border-0 @error('profile_picture') is-invalid @enderror" value="{{ old('profile_picture') }}" required name="profile_picture" id="profile_picture"/>

                                        @error('profile_picture')
                                        <p class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-8 align-items-center">
                                    <a style="margin-top: 5px" class="btn btn-light" href="{{ action('ProfileController@deletePicture') }}">{{__('messages.delete_picture')}}</a>

                                    <br>

                                    <button style="margin-top: 50px" type="submit" class="btn btn-light">{{__('messages.update_profile')}}</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

