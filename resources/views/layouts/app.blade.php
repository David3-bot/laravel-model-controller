<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Moviesss</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/
   ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/
   bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    {{-- header --}}
    @include('partials.header')
    <div class="container">
        {{-- segnaposto per il contenuto di ogni pagina.
    Questo dovrà essere sostituito in ogni pagina con un
   contenuto diverso --}}
        @yield('content')
    </div>
    {{-- footer --}}
    @include('partials.footer')
</body>

</html>
