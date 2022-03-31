<?php
if(!function_exists('view')){
    function view($view){
        return new \App\Http\Response($view);
    }
}
if(!function_exist('pathView')){
    function pathView($view)
    {
        return __DIR__.'/../..viewns/Layout';
    }
}