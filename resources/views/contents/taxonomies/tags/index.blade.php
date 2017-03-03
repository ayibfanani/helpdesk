@extends('layouts.master')

@section('content_head')
    <div class="column">
        <h1 class="title">{{ $title or null }}</h1>
    </div>
@stop

@section('content')
    
    <nav class="level" style="border-bottom: 1px solid #dbdbdb;">
        <div class="level-left">
            <div class="level-item">
                <div class="tabs">
                    <ul>
                        <li class="is-active"><a>Name</a></li>
                        <li><a>Popular</a></li>
                        <li><a>Newest</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <all-tags></all-tags>
@stop