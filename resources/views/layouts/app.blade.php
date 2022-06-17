
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c47bf836a3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css?v=').time() }}">
</head>

<body>
    @if (session('success'))
        <div class="alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <header>
        <div class="navbar">
        <ul class="navigation">
            <li class="right"><a href="/">Home</a></li>
            <li class="right"><a href="/hotel">Hotels</a></li>
        </ul>
        </div>
    </header>
    @if ($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @yield('main')
</body>

</html>
