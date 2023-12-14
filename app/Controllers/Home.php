<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('layouts/header');
        echo view('layouts/navbar');
        echo view('welcome_message');
    }
}
