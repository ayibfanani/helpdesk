@extends('layouts.master')

@section('content_head')
<div class="column">
    <h1 class="title">{{ $title or null }}</h1>
</div>
@stop


@section('content')
    <knowledge-posts></knowledge-posts>
@stop