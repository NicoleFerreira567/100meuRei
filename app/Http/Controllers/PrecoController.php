<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrecoController extends Controller
{
    public function index()
    {
        // Recupera todos os produtos
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function orderByPrice($type)
    {
        // Verifica o tipo de ordenação solicitado
        if ($type === 'crescente') {
            // Ordena os produtos por preço crescente
            $products = Product::orderBy('price', 'asc')->get();
        } elseif ($type === 'decrescente') {
            // Ordena os produtos por preço decrescente
            $products = Product::orderBy('price', 'desc')->get();
        } else {
            // Se o tipo não for válido, redireciona de volta para a página inicial
            return redirect()->route('products.index')->with('error', 'Tipo de ordenação inválido.');
        }

        return view('products.index', compact('products'));
    }
}
