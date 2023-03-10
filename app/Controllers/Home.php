<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo 'test<br>';
        echo "method ".$this->request->getMethod();
    }
}
