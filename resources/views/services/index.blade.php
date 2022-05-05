@extends('adminlte::page')

@section('title', 'Lista de Serviços')

@section('content_header')
<h1>Lista de Serviços</h1>
@stop

@section('content')

{{-- helper to check if there is a 'message' being send --}}
  @if(session('message'))
    <div class="alert alert-success">
      {{ session('message') }}
    </div>
  @endif

  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">nome</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($services as $service)
        <tr>
          <td>{{ $service->id }}</td>
          <td>{{ $service->name }}</td>
          <td>
            <a href="{{ route('services.edit', $service) }}" class="btn btn-primary">Atualizar</a>
          </td>
        </tr>
      @empty
        <tr>
          <th></th>
          <th>Nenhum registro foi encontrado</th>
          <th></th>
        </tr>
      @endforelse
    </tbody>
  </table>

  {{-- // mostrar paginação dos itens do banco (configurar bootstrap) --}}
  <div class="d-flex justify-content-center">
    {{ $services->links() }}
  </div>

  <div class="float-right">
    <a href="{{ route('services.create') }}" class="btn btn-success">Novo serviço</a>
  </div>
@stop