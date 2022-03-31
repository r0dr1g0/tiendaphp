<?php

namespace App\Http\Controllers;

class ClienteController
{
    function index()
    {
        echo '<p>listar clientes</p>';
        return view ('cliente');
    }

    function new()
    {
        echo '<p>nuevo cliente</p>';
        return view('nuevoCliente');
    }

    function edit()
    {
        echo '<p>editar cliente</p>';
        return view ('editarCliente');
    }

    function delete()
    {
        echo '<p>eliminar cliente</p>';
        return view ('eliminarCliente');
    }
}