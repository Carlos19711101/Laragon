@extends('dashboard.master')
@section('contente')
   <form action="{{route('category.store')}}" method="post">
       @include('dashboard.category.form')
   </form>
@endsection