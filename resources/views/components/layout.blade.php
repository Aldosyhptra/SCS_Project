<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSC</title>
    {{-- font inter --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- alpinejs --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- <link rel="stylesheet" href="css/{{ $css }}"> --}}

    {{-- load dinamis css --}}
    @isset($css)
        @if(is_array($css))
            @foreach($css as $style)
                <link rel="stylesheet" href="{{ asset('css/' . $style) }}">
            @endforeach
        @else
            <link rel="stylesheet" href="{{ asset('css/' . $css) }}">
        @endif
    @endisset

    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
    
  {{-- Debugging nilai $navbar --}}
    @if(isset($navbar) && $navbar === 'customize')
    @include('components.navbar_costumize')
    @else
        <x-navbar />
    @endif

    <main>
        {{ $slot }}
    </main>

    <x-footer></x-footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>