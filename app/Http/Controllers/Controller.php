<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected $data;
    function __construct()
    {
       $this->data = ["site_name"=>"my_ecommerce"];
    }

}
