@extends('layouts.master')

@section('content_head')
<div class="column">
    <h1 class="title">{{ $title or null }}</h1>
</div>
<div class="column">
    <div class="level">
        <div class="level-left"></div>
        <div class="level-right">
            <a class="button is-primary" @click="showModal('create')">
                <span>Add Department</span>
            </a>
        </div>
    </div>
</div>
@stop

@section('content')
    <knowledges></knowledges>
@stop