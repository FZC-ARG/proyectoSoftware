<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return "Bienvenido a la Pagina Principal";
});
*/
Route::get('/', HomeController::class);

//AGREGANDO NUEVA RUTA
Route::get('practicas-preprofesionales', function(){
    return "Bienvenido a la Gestion de Practicas preprofesionales";
});

//AGREGANDO NUEVA RUTA PARA CREAR UN NUEVO REGISTRO
Route::get('practicas/create', function(){
    return "En esta pagina podras crear un nuevo registro.";
});

/*
//AGREGANDO NUEVA RUTA CON VARIABLE
Route::get('practicas/{procedimiento}', function($procedimiento){
    return "Bienvenido al procedimiento: $procedimiento";
});

//AGREGANDO NUEVA RUTA CON 2 VARIABLES
Route::get('practicas/{procedimiento}/{registro}', function($procedimiento,$registro){
    return "Bienvenido al registro: $registro, del preocedimiento $procedimiento";
});
*/

//MEJORANDO EL CODIGO CON LAS RUTAS : 1 VARIABLE Y 2 VARIABLES 
Route::get('practicas/{procedimiento}/{registro?}', function($procedimiento,$registro=null){
    if($registro){ //CONDICIONAL SI SE INDICA UN REGISTRO
        return "Bienvenido al registro: $registro, del preocedimiento $procedimiento";
    }else{  // EN CASO NO SE INDIQUE UN REGISTRO
        return  "Bienvenido al procedimiento:$procedimiento";
    }
    
});

