@extends('admin.layout.app')

@section('title', 'Gestão de Produtos')

@section('content')
    <h1>Exibindo os produtos</h1>

   @if ($valor === 187)
       Valor igual
   @else
       Valor diferente
   @endif
    
@endsection