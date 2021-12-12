@extends('dashboard.master')
@section('content')
  <h6>Crear publicaciones</h6>
<form action="{{route('post.store')}}" method='POST'>
    @include('dashboard.post.form')
</form>
@endsection
