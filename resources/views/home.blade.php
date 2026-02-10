@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<h2>Página principal</h2>

<section>
   <x-card title="Laravel 12">
    Framework PHP basado en MVC.
    </x-card>
    
    <x-card title="Layouts">
        Sistema de plantillas reutilizables.
    </x-card>

    <x-card title="Componentes">
        Elementos creados por terminal.
    </x-card>
</section>

@endsection
