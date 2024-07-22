<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @inertiaHead
</head>

<body class="bg-slate-100">
    @inertia
</body>

</html>