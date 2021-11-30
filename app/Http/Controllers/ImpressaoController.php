<?php

namespace App\Http\Controllers;

use App\Models\Impressoes;
use ClientSocket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class ImpressaoController extends Controller
{
    public function imprimeTxt()
    {
        sleep(1);
        $url = 'https://malandrino.superfastsolutions.online/api/acbr/getPedido';
        $data = Http::get($url)->json();

            Storage::append($data['data']['path'] . 'ENT.TXT', $data['data']['content']);
    }
}
