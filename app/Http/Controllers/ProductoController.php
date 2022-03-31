<?php

namespace App\Http\Controllers;

class ProductoController
{
    function index ()
    {
        echo'<h1>INDEX DE PRODUCTO</h1>';
        return new \App\Http\Response('producto');
    }
    function create()
    {
        echo'<p>creando nuevo producto</p>';
        return new \App\Http\Response('nuevo producto');
    }

    function edit()
    {
        return new \App\Http\Response('editar nuevo producto');
        echo'<p>Editar cliente</p>';
    }
}