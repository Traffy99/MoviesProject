{{__('messages.hello')}},  <strong>{{ $reservation->user->name }}</strong>!
<p>{{__('messages.emailtext1')}} {{$reservation->viewing->movie->title}} {{Carbon\Carbon::parse($reservation->viewing->time)->format('d.m.y h:i')}} {{__('messages.emailtext2')}}</p>
<img src="{{$reservation->viewing->movie->cover}}" alt="image" width="200">
