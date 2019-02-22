<p>test</p>


    @foreach($offerts as $ofert)



    <p>{{$ofert->id}}</p>
    <p>{{$ofert->admin_name}}</p>
    <p>{{$ofert->content->title}}</p>



    @endforeach
