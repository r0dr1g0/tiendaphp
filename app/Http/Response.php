<?php

namespace App\Http;

class Response
{
    private $view;

    function __construct($view)
    {
        $this->view = $view;
    }

    function send()
    {
        $content = file_get_contents(__DIR__ .'/../../views/'.$this->view.'php');
        require __DIR__.'/../../views/Layout.php';
    }
}