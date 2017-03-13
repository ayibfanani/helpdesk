@extends('layouts.master')

@section('content_head')
<div class="column">
    <h1 class="title">{{ $title or null }}</h1>
</div>
<div class="column">
    <div class="level">
        <div class="level-left"></div>
        <div class="level-right">
            <a href="{{ route('knowledge.posts', 13) }}" class="button">Back</a>
        </div>
    </div>
</div>
@stop


@section('content')
<div class="columns is-marginless is-fullheight">
    <div class="column">
        <knowledge-post-form action="{{ $action_url }}" method="{{ $method }}" postdata="1"></knowledge-post-form>
    </div>
</div>
@stop