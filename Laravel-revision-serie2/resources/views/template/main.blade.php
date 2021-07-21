<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <header>
        <div>
            <ul class="d-flex justify-content-center text-decoration-none pt-3 mb-5" style="list-style-type: none">
                <li> <a class="text-decoration-none text-dark m-5 border-bootom-5" href="{{ route('view1') }}">View1</a></li>
                <li> <a class="text-decoration-none text-dark m-5 border-bootom-5" href="{{ route('view2') }}">View2</a></li>
                <li> <a class="text-decoration-none text-dark m-5 border-bootom-5" href="{{ route('view3') }}">View3</a></li>
            </ul>
        </div>
        
    </header>

    @yield('content')

    <footer>
        <div class="card text-center">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
