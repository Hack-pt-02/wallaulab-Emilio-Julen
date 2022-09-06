<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{$title ?? 'Rapido.es'}}</title>

    @vite(['resources/css/app.css'])
    @vite(['resources/js/bootstrap.js'])

    @livewireStyles
    {{$style ?? ''}}
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>


</head>

<body>
    <x-navbar />
    {{$slot}}
    <x-footer />
    @livewireScripts
    @vite(['resources/js/app.js'])
    @vite(['resources/js/logout.js'])
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    {{$script ?? ''}}
</body>

</html>
