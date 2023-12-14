<?php

namespace App\Controllers;

use Config\Services;
use App\Controllers\BaseController;

class TransaksiMasukController extends BaseController
{
    public function index()
    {
        $client = Services::curlrequest();
        $response = $client->request('GET', 'http://localhost:8080/api/v1/transaksi-masuk');
        $result = json_decode($response->getBody());

        // dd($result->results[0]->id_transaksi_masuk);

        echo view('layouts/header');
        echo view('layouts/navbar');
        echo view('masuk/index',['result' => $result]);
    }
}
