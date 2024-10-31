@extends('layouts.app')

@section('title', 'Code & Lens - User')
    


@section('content')
<link rel="stylesheet" href="{{ asset('sass/user/user.css') }}">

    <div class="user">
        <h2>Datos Alumno: {{$user->lastname}} {{$user->name}}</h2>
        
        <p>Name:</p> <p>{{$user->name}}</p>
        <p>LastName:</p> <p>{{$user->lastname}}</p>
        <p>Address:</p> <p>{{$user->address}}</p>
        <p>Phone:</p> <p>{{$user->phone}}</p>
        <p>Email:</p> <p>{{$user->email}}</p>
        <p>DNI:</p> <p>{{$user->dni}}</p>
        <p>Date of Birth:</p> <p>{{$user->date_birth}}</p>
        <p>UserName:</p> <p>{{$user->username}}</p>
        
        <a href="/users/{{$user->id}}/edit">Edit User</a>
        
        <form action="/users/{{$user->id}}" method="POST" >
            
            @csrf

            @method('DELETE')

            <button type="submit" class="deleteUser">Delete User</button>
        </form>
    </div>
    
    
@endsection