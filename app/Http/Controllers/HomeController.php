<?php

namespace App\Http\Controllers;

class HomeController
{
    function index()
    {
        echo '<p> implementar la logica del controllador Home metodo index </p>';
        return  view('Home');
    }
}