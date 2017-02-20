@extends('layouts.master')

@section('content')
<section class="hero is-fullheight is-dark is-bold" v-if="true">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-4 is-offset-4">
                    <h1 class="title">
                        Register an Account
                    </h1>
                    
                    <register></register>

                    <p class="has-text-centered">
                        <a href="/login">Login</a>
                        | 
                        <a href="#">Need help?</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
