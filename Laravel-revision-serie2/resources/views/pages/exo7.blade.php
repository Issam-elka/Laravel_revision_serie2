@extends('template.main')
@section('content')
    @foreach ($outils as $outil)
        <div class="container">
            <h1>{{$outil}}</h1>
        </div>
    @endforeach
@endsection