@extends('layout.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
<<<<<<< HEAD
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
=======
    <img src="img/{{ $image }}" alt="{{ $name }}" width="250" class="img-thumbnail rounded-circle">
>>>>>>> d2f9b471694f517764fb15dd5139a83fd0bbb04a
@endsection
