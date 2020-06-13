@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @foreach($users as $user)
                            @if($user -> permission_level != 1)
                                <div class="card-body {{$loop->last? "": "border-bottom"}} " style="display: flex; flex-direction: row">
                                    <div style="width: 20%;display: inline-block; padding-right: 30px">
                                        @if($user->getImageAttribute())<img src="{{asset($user->getImageAttribute())}}" alt="image" width="50">
                                        @else <img src="{{ asset('uploads/images/default_avatar.jpg')}}"  alt="image" width="50">
                                        @endif
                                    </div>
                                    <div style="width: 40%">
                                        <h5>{{$user->name}}</h5>
                                        <h6>{{$user->email}}</h6>
                                    </div>
                                    <div style="width: 40%">
                                        <div style="float:right">
                                            @if(!$user->is_blocked)<a href="{{action('AdminController@block', $user->id)}}" class="btn-light btn">{{__('messages.block')}}</a>
                                            @else <a href="{{action('AdminController@block', $user->id)}}" class="btn-light btn">{{__('messages.unblock')}}</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

