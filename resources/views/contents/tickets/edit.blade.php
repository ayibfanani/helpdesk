@extends('layouts.master')

@section('content_head')
<div class="column">
    <h1 class="title">{{ $title or null }}</h1>
</div>
@stop


@section('content')
<div class="columns is-marginless">
    <div class="column is-paddingless">
        <ticket-show></ticket-show>
    </div>
    <div class="column is-one-quarter border-left-default is-fullheight"></div>
</div>
@stop