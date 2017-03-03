@extends('layouts.master')

@section('content_head')
<div class="column">
    <h1 class="title">{{ $title or null }}</h1>
</div>
@stop

@section('content')
<div class="columns is-marginless">
    <div class="column is-3">
        <div class="card">
            <div class="card-content">
                <h1 class="title">FAQ</h1>
                <ul>
                    <li>
                        <a href="{{ route('knowledge.posts', 13) }}">Lorem ipsum dolor sit amet</a>
                    </li>
                    <li>
                        <a href="">consectetur adipisicing elit.</a>
                    </li>
                    <li>
                        <a href="">adipisci atque pariatur illum vel</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="column is-3">
        <div class="card">
            <div class="card-content">
                <h1 class="title">General</h1>
                <ul>
                    <li>
                        <a href="">Lorem ipsum dolor sit amet</a>
                    </li>
                    <li>
                        <a href="">consectetur adipisicing elit.</a>
                    </li>
                    <li>
                        <a href="">adipisci atque pariatur illum vel</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop