<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</head>
<body>

    <nav class="navbar navbar-dark bg-primary navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{'/'}}">Sales</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="{{url('/')}}">Home</a>
                    <a class="nav-item nav-link" href="{{url('/category')}}">Category</a>
                    <a class="nav-item nav-link" href="{{url('/unit')}}">Units</a>
                    <a class="nav-item nav-link" href="{{url('/merchandise')}}">Merchandise</a>
                </div>
            </div>
        </div>
    </nav>

@yield('content')
</body>
</html>
