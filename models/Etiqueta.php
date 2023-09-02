<?php

namespace Model;

class Etiqueta extends ActiveRecord {
    protected static $tabla = 'etiquetas';
    protected static $columnasDB = ['id', 'nombre', 'prefijo'];

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->prefijo = $args['prefijo'] ?? '';
    }

    public function validar(){
        if(!$this->nombre){
            self::$alertas['error'][] = 'El nombre es obligatorio';
        }
        if(!$this->prefijo){
            self::$alertas['error'][] = 'El prefijo es obligatorio';
        }

        return self::$alertas;
    }
}

?>