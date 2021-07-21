<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="d-flex">
            <ul class="d-flex">
                <li> <a href="{{route('view1')}}">View1</a></li>
                <li> <a href="{{route('view2')}}">View2</a></li>
                <li> <a href="{{route('view3')}}">View3</a></li>
            </ul>
        </div>
    </header>

    @yield('content')

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>