@extends('pages.home')

@section('content')
<h1>Master LAyout</h1>
<p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
<p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
@endsection

@section('title')
    Master Layout
@endsection 

@section('nav')
    @parent
    <li>Sarfraz</li>
@endsection

@push('script')
    <script src="/example.js"></script>
@endpush

@push('script')
    <script src="/jQuery.js"></script>
    <script src="/bootstrap.js"></script>
    <script src="/example.js"></script>
@endpush

@push('style')
    <script src="/example.css"></script>
@endpush

@prepend('script')
<h1>sarfrzaz</h1>          {{-- use it for a html part or style css --}}
@endprepend