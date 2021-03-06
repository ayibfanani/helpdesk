@extends('layouts.master')

@section('content_head')
<div class="column">
    <h1 class="title">{{ $title or null }}</h1>
</div>
<div class="column">
    <div class="level">
        <div class="level-left"></div>
        <div class="level-right">
            <a href="{{ route('knowledge.createpost', 13) }}" class="button is-primary">
                <span>New Post</span>
            </a>
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
                        <li class="is-active"><a>All (10)</a></li>
                        <li><a>Published (5)</a></li>
                        <li><a>Draft (4)</a></li>
                        <li><a>Trash (1)</a></li>
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
    
    <knowledge-posts></knowledge-posts>
@stop