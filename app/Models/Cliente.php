<?php
namespace App\Models;
class Base{
    function saludar(){

    }
}
class Cliente extends Base
{
    public $id;
    public $nombre;
    public $correo;
    public $celular;
}