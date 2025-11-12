@extends('layouts.admin')
@section('conteudo')
<h4>Bem-vindo {{Auth::user()->name}}</h4>
<h6>Hoje são {{ date('d/m/Y')}}</h6>
@endsection