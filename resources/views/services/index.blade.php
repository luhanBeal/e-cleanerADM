@extends('adminlte::page')

@section('title', 'Service List')

@section('content_header')
<h1>Service List</h1>
@stop

@section('content')

  @include('_messages_section')

  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($services as $service)
        <tr>
          <td>{{ $service->id }}</td>
          <td>{{ $service->name }}</td>
          <td>
            <a href="{{ route('services.edit', $service) }}" class="btn btn-primary">Update</a>
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
    <a href="{{ route('services.create') }}" class="btn btn-success">New Service</a>
  </div>
@stop