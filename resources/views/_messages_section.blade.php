{{-- helper to check if there is a 'message' being send --}}
@if(session('message'))
<div class="alert alert-success">
  {{ session('message') }}
</div>
@endif