<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire - Examples</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
</head>

<body>
    <div class="app-grid h-full">
        @include('partials.header')

        <div class="container mx-auto my-5">
            <h1 class="text-6xl">Livewire Examples</h1>
            @yield('content')
        </div>

        @include('partials.footer')
    </div>


    @livewireScripts
</body>

</html>
