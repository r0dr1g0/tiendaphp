<?php

namespace App\Http;

class Auto
{
    public $color;
    public $modelo;
    public $ano;
    public $funcional;
    public $placa;

    function arrancar()
    {
        echo'<p>El automovil esta arrancando</p>';
    }

    function mostrar()
    {
        echo'<p>El color del auto es:'.$this->color.'</p>';
        echo'<p>El modelo del auto es:'.$this->modelo.'</p>';
        echo'<p>El ano del auto es:'.$this->ano.'</p>';
        // echo'<p>El funcional del auto es:'.$this->funcional.'</p>';
        if ($this->funcional)
        {
            echo '<p>El auto es funcional</p>';
        }
        else
        {
            echo '<p>El auto no es funcional</p>';
        }
        echo'<p>El placa del auto es:'.$this->placa.'</p>';
    }
}