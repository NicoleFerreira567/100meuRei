<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrecoController extends Controller
{
    public function ordenar($tipo)
    {
        // Aqui você pode implementar a lógica para ordenar os preços
        // com base no tipo recebido (crescente ou decrescente)

        return view('sua_view')->with('tipoOrdenacao', $tipo);
    }
}
