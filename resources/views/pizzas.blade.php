@foreach($pizzas as $pizza)
    <div>{{$pizza['type']}} {{$pizza['base']}}</div>
@endforeach

<p>{{ $name }}</p>