@extends('adminlte::page')

@section('title', 'User List')

@section('content_header')
<h1>User List</h1>
@stop

@section('content')

  @include('_messages_section')

  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
            <a href="{{ route('users.edit', $user) }}" class="btn btn-primary">Update</a>
            {{-- HORSE to force the DELETE method and not GET --}}
            <form action="{{ route('users.destroy', $user) }}" method="post" style="display: inline">
              {{-- Blade directive --}}
              @method('DELETE')
              @csrf

              <button type="submit" class="btn btn-danger" onclick="return confirm('Delete this user?')">
                Delete
              </button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <th></th>
          <th>No records found</th>
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