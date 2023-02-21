<?php

class PaginasController extends Controlador
{
    public function __construct()
    {
        echo "hola soy el controlador paginas:";
    }

    public function index()
    {
        $this->vista('hola');
    }

    public function articulo()
    {
        echo "<br>";
        echo "soy el metodo articulo de la clase paginas";
    }

    public function actualizar($id)
    {
        echo "<br>";
        echo $id;
    }
}



?>