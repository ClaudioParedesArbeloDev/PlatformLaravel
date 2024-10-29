<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;
use App\Models\User;
use App\Models\Users;

Route::get('/', [HomeController::class, 'index']);

Route::get('/users', [UsersController::class, 'register']);

/* Route::get('/users/create', [UsersController::class, 'register']);  */ 


/* Route::get('/register', [UsersController::class, 'register']);
//Creacion de usuarios
Route::get('prueba', function () {
    $user = new Users;

    $user->name = 'Susana';
    $user->lastname = 'Gonzalez';
    $user->address = 'Arijon 515';
    $user->phone = '3415856333';
    $user->email = 'susanamarinagonzalez@gmail.com';
    $user->dni = '28968695';
    $user->fecha_nacimiento = '1981-11-10';
    $user->username = 'susana';
    $user->password = bcrypt('123456');

    $user->save();

    return $user;
}); 

//Update de usuarios

Route::get('update', function(){
    /* $user = Users::find(1); 
    $user = Users::where('dni', '28968695')
    //$user = Users::where('id', '<', '3') trae los usuarios con id menor a 3
    //->get()
        ->first(); //busca el primer usuario con ese registro

    $user->name = 'Susana Marina';

    $user->save();

    return $user;
});

//Trae todos los registros

Route::get('registros', function(){
    $users = Users::all();
    //$users = User::orderBy('lastname', 'asc')->get(); Trae todos los registros ordenados por apellido
    //select('name', 'lastname')->get(); Trae los nombres y apellidos de todos los registros
    //take(5)->get(); Trae los 5 primeros registros
    return $users;
});

Route::get('delete', function(){
    $user = Users::find(5);
    $user->delete();
    return $user;
}); */
