<?php
class MiClase
{
    const constante = 'valor constante ';
    function mostrar_constante()
    {
        echo self::constante . '<br>';
    }
}

abstract class ClaseAbstracta
{
    //Se fuerza la herencia de la clase para definir estos métodos
    abstract protected function tomarValor();
    abstract protected function prefixValor($prefix);
    // Método común
    public function printOut()
    {
        print $this->tomarValor() . "<br>";
    }
}

class ClaseConcreta1 extends ClaseAbstracta
{
    protected function tomarValor()
    {
        return "ClaseConcreta1";
    }
    public function prefixValor($prefix)
    {
        return "{$prefix}ClaseConcreta1";
    }
}

class ClaseConcreta2 extends ClaseAbstracta
{
    protected function tomarValor()
    {
        return "ClaseConcreta2";
    }
    public function prefixValor($prefix)
    {
        return "{$prefix}ClaseConcreta2";
    }
}

interface iTemplate
{
    public function poner_variable($nombre, $var);
    public function ver_html($template);
}

class Template implements iTemplate
{
    private $vars = array();
    public function poner_variable($nombre, $var)
    {
        $this->vars[$nombre] = $var;
    }
    public function ver_html($template)
    {
        foreach ($this->vars as $nombre => $value) {
            $template = str_replace('{' . $nombre . '}', $value, $template);
        }
        return $template;
    }
}
