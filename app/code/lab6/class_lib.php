<?php
class cliente
{
    var $nombre;
    var $numero;
    var $peliculas_alquiladas;

    function __construct($nombre, $numero)
    {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->peliculas_alquiladas = array();
    }

    function __destruct()
    {
        echo "<br> destruido " . $this->nombre;
    }

    function dame_numero()
    {
        return $this->numero;
    }
}

class soporte
{
    public $titulo;
    protected $numero;
    private $precio;

    function __construct($tit, $num, $precio)
    {
        $this->tit = $titulo;
        $this->num = $numero;
        $this->precio = $precio;
    }

    public function dame_precio_sin_itbms()
    {
        return $this->precio;
    }
}
