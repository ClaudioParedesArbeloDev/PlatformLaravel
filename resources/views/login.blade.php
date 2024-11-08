@extends('layouts.app')

@section('title', 'Code & Lens - Login')
    


@section('content')
    <link rel="stylesheet" href="{{asset('sass/login/login.css') }}">

    <div class="loginContainer">
        <h2 class="loginTitle">Login</h2>
        <form action="" method="POST">
            @csrf
            <div class="loginForm">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button type="submit">Login</button>
                <a href="{{route('users.create')}}" class="signup">Don't have an account? Sign up here!</a>
            </div>

    </div>
    
@endsection