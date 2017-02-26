@extends('layouts.master')

@section('content_head')
    <div class="column">
        <h1 class="title">{{ $title or null }}</h1>
    </div>
@stop

@section('content_neck')
<div class="level-left">
    <div class="level-item">
        <div class="tabs">
            <ul>
                <li class="is-active"><a>All</a></li>
                <li><a>Open</a></li>
                <li><a>Pending</a></li>
                <li><a>Solved</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="level-right">
    <div class="level-item">
        <div class="control is-horizontal">
            <div class="control-label">
                <label class="">Page</label>
            </div>
            <div class="control">
                <div class="select is-fullwidth">
                    <select>
                        <option>15</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')
    <all-tickets></all-tickets>
    <hr>
    <pagination>
@stop