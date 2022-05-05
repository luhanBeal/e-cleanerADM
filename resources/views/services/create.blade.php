@extends('adminlte::page')

@section('title', 'Novo Serviço')

@section('content_header')
<h1>Novo Serviço</h1>
@stop

@section('content')

@include('_messages')

<form action="{{ route('services.store') }}" method="post">
  @include('services._form')
</form>
@stop

{{-- adminLTE permite adicao de JS(script) --}}
{{-- OU ADD NA AREA PLUGIN DO ADMINLTE --}}
{{-- @section('js')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection --}}