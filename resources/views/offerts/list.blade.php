<p>test</p>

{{--{{$offerts->status}}--}}
    @foreach($offerts as $ofert)
        @for($i=0;$i<5;$i++)


    <p>{{$ofert[$i]['id']}}</p>
    <p>{{$ofert[$i]['admin_name']}}</p>
    <p>{{$ofert[$i]['content']['title']}}</p>
    {{--@foreach($$ofert[$i]['cities'] as $item)--}}
        {{--<p>{{$item}}</p>--}}
        {{--@endforeach--}}

        @endfor
    @endforeach
