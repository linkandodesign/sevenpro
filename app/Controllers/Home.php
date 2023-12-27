<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $dadosHeader['title'] = "Home - Seven Pro";
        $dadosHeader['active'] = ['home'=>true];
        echo view('/templates/header', $dadosHeader);
        echo view('/home');
        echo view('/templates/footer');
    }
}
