@extends('layouts.master')

@section('content')
@include('fragments.validation-errors')
@include('fragments.sesion')
<h1>Post</h1>
<form method="CATEGORY" action="{{ route("category.update", $category -> id) }}">
    @csrf
    @method("PUT")
    @include('examen.forma')
</form>
  
@endsection