<?php

namespace App\Http\Controllers;

class HomeController
{
    function index()
    {
        echo '<p> implementar la logica del controllador Home metodo index </p>';
        return new \App\Http\Response('home');
    }
}