<?php

class PaginasController extends Controlador
{
    public function __construct()
    {
        echo "hola soy el controlador paginas:";
    }

    public function index()
    {
        $this->vista('paginas/inicio');
    }

    public function articulo()
    {
        $this->vista('paginas/inicio');
    }

    public function actualizar($id)
    {
        echo "<br>";
        echo $id;
    }
}



?>