@extends('adminlte::page')

@section('title', 'User List')

@section('content_header')
<h1>User List</h1>
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
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>
            <a href="{{ route('users.edit', $user) }}" class="btn btn-primary">Update</a>
            <a href="{{ route('users.destroy', $user) }}" class="btn btn-danger">Delete</a>
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
    {{ $users->links() }}
  </div>

  <div class="float-right">
    <a href="{{ route('users.create') }}" class="btn btn-success">New User</a>
  </div>
@stop