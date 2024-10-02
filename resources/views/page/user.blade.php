<h1>User Page</h1>
@foreach ($names as $key=>$value)
<h1>{{$key}}.{{$value['name']}}.{{$value['phno']}}.{{$value['city']}}
    <a href="{{ route('user.detail',$key)}}">Show</a>
</h1>
@endforeach