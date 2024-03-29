<?php
//use Symfony\Component\Routing\Route;
use Illuminate\Support\Facades\Route; 
use App\Articulo;
use App\Cliente;
use App\Calificaciones;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get("/", "AdminController@index");
Route::get("/crear", "AdminController@create");
Route::get("/articulos", "AdminController@store");
Route::get("/mostrar", "AdminController@show");
Route::get("/contacto", "AdminController@contactar");
Route::get("/galeria", "AdminController@galeria");


/*Route::get("/insertar", function(){
    DB::insert ("INSERT INTO articulos (nombre_articulo, precio, pais_origen, seccion, observaciones) values (?, ?, ?, ?, ?)", ["Jarron", 15.2,"Japon", "Ceramica", "Ganga"]);

});

Route::get("/leer", function(){
    
    $resultados=DB::select ("SELECT * FROM articulos WHERE id=?", [1]);

    foreach($resultados as $articulo){
        return $articulo->nombre_articulo;
    }
});

Route::get("/actualizar", function(){
    DB::update ("UPDATE articulos SET seccion='decoracion' WHERE id=?", [1]);

});

Route::get("/borrar", function(){
    DB::update("DELETE FROM articulos WHERE id=?", [1]);

});*/

Route::get("/leer", function(){
    /*$articulos = Articulo::all();
    
    foreach($articulos as $articulo){
        echo "Nombre: " .$articulo->nombre_articulo."Precio: ". $articulo->precio ."<br>";
    }*/

    $articulos = Articulo::where("seccion", "Ceramica")->max("precio");
    return $articulos;
});
Route::get("/insertar", function(){
   $articulos = new Articulo;

    $articulos->nombre_articulo ="Pantalones";
    $articulos->precio =60;
    $articulos->pais_origen ="España";
    $articulos->observaciones ="Lavados a la piedra";
    $articulos->seccion ="Confeccion";

    $articulos->save();
});

Route::get("/actualizar", function(){
   /*$articulos =Articulo::find(7);

    $articulos->nombre_articulo ="Pantalones";
    $articulos->precio =90;
    $articulos->pais_origen ="España";
    $articulos->observaciones ="Lavados a la piedra";
    $articulos->seccion ="Confeccion";

    $articulos->save();*/

    Articulo::where("seccion", "Menaje")->where("pais_origen", "España")->update(["precio"=>90]);
});

Route::get("/borrar", function(){

    Articulo::where("seccion","Ferreteria")->delete();
});

Route::get("/insercionvarios", function(){
    Articulo::create(["nombre_articulo"=>"Impresora","precio"=>50,"pais_origen"=>"Colombia","observaciones"=>"Nada que decir","seccion"=>"Informatica"]);
});

Route::get("/cliente/{id}/articulo", function($id){
    return Cliente::find($id)->articulo;
});

Route::get("/articulo/{id}/cliente", function($id){
    return Articulo::find($id)->cliente->nombre;
});

Route::get("/articulos", function(){
    $articulos = Cliente::find(3)->articulos->where("pais_origen", "España");

    foreach($articulos as $articulo){
        echo $articulo->nombre_articulo . "<br>";
    }
});

Route::get("/cliente/{id}/perfil", function($id){

    $cliente = Cliente::find($id);
    foreach ($cliente->perfils as $perfil){

        return $perfil->nombre;
    }
});

Route::get("/calificaciones", function(){
    $articulo = Articulo::find(4);
    foreach($articulo->calificaciones as $calificacion){
        return $calificacion;
    }
});
