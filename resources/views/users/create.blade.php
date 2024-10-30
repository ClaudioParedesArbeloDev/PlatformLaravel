@extends('layouts.app')

@section('title', 'Code & Lens - Register User')
    


@section('content')

    <link rel="stylesheet" href="{{asset}}">

    <h2>Ingrese sus datos</h2>
    <form action="/users" method="POST">
        @csrf
        <label for="">
            Nombre:
            <input type="text" name="name">
        </label>
        <label for="">
            Apellido:
            <input type="text" name="lastname">
        </label>
        <label for="">
            Direccion:
            <input type="text" name="address">
        </label>
        <label for="">
            Telefono:
            <input type="text" name="phone">
        </label>
        <label for="">
            Email:
            <input type="text" name="email">
        </label>
        <label for="">
            DNI:
            <input type="text" name="dni">
        </label>
        <label for="">
            Fecha de nacimiento:
            <input type="text" name="date_birth">
        </label>
        <label for="">
            Usuario:
            <input type="text" name="username">
        </label>
        <label for="">
            Contraseña:
            <input type="password" name="password">
        </label>

        <button type="submit">Registrar</button>
    </form>
    
@endsection