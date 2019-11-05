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
        $this->titulo = $tit;
        $this->numero = $num;
        $this->precio = $precio;
    }

    public function dame_precio_sin_itbms()
    {
        return $this->precio;
    }

    public function dame_precio_con_itbms()
    {
        return $this->precio * 1.07;
    }

    public function dame_numero_idetificacion()
    {
        return $this->numero;
    }
    public function imprime_caracteristicas()
    {
        echo "<br>" . $this->titulo;
        echo "<br>" . $this->precio . " itbms no incluido";
    }
}

class video extends soporte
{
    protected $duracion;
    function __construct($tit, $num, $precio, $duracion)
    {
        parent::__construct($tit, $num, $precio);
        $this->duracion = $duracion;
    }

    public function imprime_caracteristicas()
    {
        echo "<br>pelicula en bluray";
        parent::imprime_caracteristicas();
        echo "<br>duracion " . $this->duracion;
    }
}

class juego extends soporte
{
    protected $consola;
    protected $min_jugadores;
    protected $max_jugadores;

    function __construct($tit, $num, $precio, $consola, $min_j, $max_j)
    {
        parent::__construct($tit, $num, $precio);
        $this->consola = $consola;
        $this->min_jugadores = $min_j;
        $this->max_jugadores = $max_j;
    }

    public function imprime_caracteristicas()
    {
        echo "<br> juego para " . $this->consola;
        parent::imprime_caracteristicas();
        echo "<br>" . $this->imprime_jugadores_posibles();
    }

    public function imprime_jugadores_posibles()
    {
        if ($this->min_jugadores == $this->max_jugadores) {
            if ($this->min_jugadores == 1) {
                echo "<br> para un jugador";
            } else {
                echo "<br> para" . $this->min_jugadores . " jugadores";
            }
        } else {
            echo "<br> de " . $this->min_jugadores . " a " . $this->max_jugadores . " jugadores";
        }
    }
}

class Foo
{
    public static $mystatic = "foo";
    public function staticvalor()
    {
        return self::$mystatic;
    }
}

class Bar extends Foo
{
    public function foostatic()
    {
        return parent::$mystatic;
    }
}
