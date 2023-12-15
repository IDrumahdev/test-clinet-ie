<?php

namespace App\Controllers;

use Config\Services;
use App\Controllers\BaseController;

class TransaksiKeluarController extends BaseController
{
    public function index()
    {
        $client = Services::curlrequest();
        $response = $client->request('GET', 'http://localhost:8080/api/v1/transaksi-keluar');
        $result = json_decode($response->getBody());
        echo view('layouts/header');
        echo view('layouts/navbar');
        echo view('keluar/index',['result' => $result]);
    }
}
