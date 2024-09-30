
<a href={{ route('post')}}>Post</a>
<br>
<a href="{{ route('about')}}">About Page</a>
<br>
{{4+5}}
<br>
{{ "sarfraz" }}
<br>
{!! '<h1>sarfraz</h1>'!!}
<br>
{{-- {!! "<script>alert('sarfraz')</script>" !!} --}}

@php
    $user='sarfraz';
@endphp

{{ $user }}

@php
    $names=['sarfraz','adil','anas'];
@endphp
<ul>
@foreach ($names as $name)
    {{-- <li>{{$loop->index}}-{{$name}}</li> --}}
    <li>{{$loop->iteration}}-{{$name}}</li>
    {{-- <li>{{$loop->count}}-{{$name}}</li>      --}}       {{--$loop->even ,odd,first,last--}}
@endforeach
</ul>