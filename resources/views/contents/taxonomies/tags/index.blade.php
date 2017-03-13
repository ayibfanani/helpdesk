@extends('layouts.master')

@section('content_head')
    <div class="column">
        <h1 class="title">{{ $title or null }}</h1>
    </div>
    <div class="column">
        <div class="level">
            <div class="level-left"></div>
            <div class="level-right">
                <button class="button is-primary" @click="showModal">Add Tag</button>
            </div>
        </div>
    </div>
@stop

@section('content')
    
    <nav class="level" id="nav-content">
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