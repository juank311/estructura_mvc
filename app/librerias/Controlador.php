<?php

#clase controlador principal: carga los modelos y las vistas
Class Controlador {

    public function modelo ($modelo)
    {
        require_once('../app/modelos/'. $modelo. '.php');

        return new $modelo();
    }

    public function vista ($vista, $datos = [])
    {
        if (file_exists('../app/vistas/'.$vista.'.php')) {

                require_once('../app/vistas/'. $vista. '.php');
                
        }else {
            //si no existe debe mostrar un error
            die('La vista no existe');
        }
      
    }
}
