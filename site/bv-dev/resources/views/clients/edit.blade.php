@extends('layout')

@section('title', "Crear cliente")

@section('content')
    <h1>Editar cliente</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <h6>Por favor corrige los errores debajo:</h6>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url("clientes/{$client->id}") }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="fname" placeholder="John" value="{{ old('fname', $client->fname) }}">
        <br>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="lname" placeholder="Smith" value="{{ old('lname', $client->lname) }}">
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="john@example.com" value="{{ old('email', $client->email) }}">
        <br>
        <label for="password">Phone:</label>
        <input type="text" name="phone" id="phone" placeholder="10 Numbers">
        <br>
        <button type="submit">Update client</button>
    </form>

    <p>
        <a href="{{ route('clients.index') }}">Regresar al listado de clientes</a>
    </p>
@endsection