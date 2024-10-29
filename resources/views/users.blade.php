@extends('layouts.app')

@section('title', 'Code & Lens')
    


@section('content')

    <h1>Todos los usuarios</h1>

    @foreach ($users as $user)
    <li>{{ $user->name }}</li>
    <li>{{ $user->lastname }}</li>
        
    @endforeach
    
@endsection