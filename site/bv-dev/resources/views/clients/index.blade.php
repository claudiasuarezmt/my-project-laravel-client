@extends('layout')

@section('title', "Crear cliente")

@section('content')
<div class="d-flex justify-content-between align-items-end mb-3 mt-5 ">
    <h1 class="pb-1">Lista clientes</h1>
    <p>
        <a href="{{ route('clients.create') }}" class="btn btn-primary">New client</a>
    </p>
</div>

@if ($clients->isNotEmpty())
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col">Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
    <tr>
        <th scope="row">{{ $client->id }}</th>
        <td>{{ $client->name }}</td>
        <td>{{ $client->email }}</td>
        <td>
            <form action="{{ route('clients.destroy', $client) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{ route('clients.show', $client) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                <a href="{{ route('clients.edit', $client) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@else
    <p>No hay clientes registrados.</p>
@endif

@endsection

