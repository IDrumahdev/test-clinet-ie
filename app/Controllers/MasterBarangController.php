<?php

namespace App\Controllers;

use Config\Services;
use App\Controllers\BaseController;

class MasterBarangController extends BaseController
{
    public function index()
    {
        // $client = Services::curlrequest();
        // $response = $client->request('GET', 'http://localhost:8080/api/v1/barang/3');
        // $result = json_decode($response->getBody());
        //     return view('welcome_message', ['result' => $result]);

        echo view('layouts/header');
        echo view('layouts/navbar');
        echo view('home/index');
    }
}
