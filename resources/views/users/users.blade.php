@extends('layouts.app')

@section('title', 'Code & Lens')
    


@section('content')

    <h1>Todos los usuarios</h1>

    @foreach ($users as $user)
    <li>
        <a href="/users/{{ $user->id }}">
        {{ $user->name }}
        </a>
    </li>
    
        
    @endforeach
    
@endsection