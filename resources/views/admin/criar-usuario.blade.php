@extends('layouts.admin')
@section('conteudo')

@if(Route::currentRouteName() == 'usuarios.novo')
@livewire('criar-usuarios')
@else
@livewire('criar-usuarios', ['user' => $user])
@endif

@endsection