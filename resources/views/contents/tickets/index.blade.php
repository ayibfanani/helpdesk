@extends('layouts.master')

@section('content_head')
    <div class="column">
        <h1 class="title">{{ $title or null }}</h1>
    </div>
@stop

@section('content')
    
    <nav class="level" id="nav-content">
        <div class="level-left">
            <div class="level-item">
                <div class="tabs">
                    <ul>
                        <li class="is-active"><a>All (10)</a></li>
                        <li><a>Open (5)</a></li>
                        <li><a>Pending (4)</a></li>
                        <li><a>Solved (9)</a></li>
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
    </nav>

    <all-tickets></all-tickets>
@stop