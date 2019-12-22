@extends('layouts.app')

@section('content')
<div class="container">
    ここは編集画面です。
    <p class="h1">{{ $custom->title }}</p>
    <p class="h2">{!! nl2br(e($custom->customs)) !!}</p>
    <img class="" src="{{ asset('/storage/img/'.$custom->img) }}" height="100">
</div>
@endsection


