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
        <login></login>
    </div>

    <script src="/js/app.js"></script>
</body>
</html>
