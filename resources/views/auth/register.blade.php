<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ @$title }}</title>
    
    <link rel="stylesheet" href="/css/app.css">

    <script>
        window.Laravel = '{{ csrf_token() }}';
    </script>
</head>
<body>
    <div id="app">
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
    </div>

    <script src="/js/app.js"></script>
</body>
</html>