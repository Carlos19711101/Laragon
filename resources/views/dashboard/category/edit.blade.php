@extends('dashboard.master')
@section('content')
  <h6>Editar publicaciones</h6>
<form action="{{route('post.undate',$post -> id) }}" method='POST'>
    @method('PUT')
    @include('dashboard.post.form')
</form>
@endsection