<?php

//traer la url o mapear la url ingresada en el navegador
// 1- Controlador 2- Metodo 3- Parametro
//empelo: articulo/editar/4

class Core 
{
    protected $controladorDefault = 'paginas';
    protected $metodoDefault = 'index';
    protected $parametroDefault = 'index';

    public function __construct()
    { 
        // $url = $this->obtenerURL();
       print_r ($this->obtenerURL());
        
    }

    public function obtenerURL() 
    {
        if (isset($_GET['url'])) 
        {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

};
