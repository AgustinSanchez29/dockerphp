<?php
class cliente
{
    public $nombre;
    public $numero;
    public $peliculas_alquiladas;

    public function __construct($nombre, $numero)
    {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->peliculas_alquiladas = array();
    }

    public function __destruct()
    {
        echo "<br> destruido: " . $this->nombre;
    }

    public function dame_numero()
    {
        return $this->numero;
    }
}

//instanciamos objetos
$cliente_1 = new cliente("pepe", 1);
$cliente_2 = new cliente("roberto", 564);

echo "<br> el identificador del cliente 1 es: " . $cliente_1->dame_numero;
echo "<br> el identificador del cliente 2 es: " . $cliente_2->dame_numero;
