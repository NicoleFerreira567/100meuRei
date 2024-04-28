<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function moveis()
    {
        $produtos = Product::where('categoria', 'moveis')->get();
        return view('site.moveis', compact('produtos'));
    }

    public function limpeza()
    {
        $produtos = Product::where('categoria', 'limpeza')->get();
        return view('site.limpeza', compact('produtos'));
    }
    
    public function autopecas()
    {
        $produtos = Product::where('categoria', 'autopecas')->get();
        return view('site.autopecas', compact('produtos'));
    }
    
    public function ferramentas()
    {
        $produtos = Product::where('categoria', 'ferramentas')->get();
        return view('site.ferramentas', compact('produtos'));
    }
    
    public function jardinagem()
    {
        $produtos = Product::where('categoria', 'jardinagem')->get();
        return view('site.jardinagem', compact('produtos'));
    }

    public function papelaria()
    {
        $produtos = Product::where('categoria', 'papelaria')->get();
        return view('site.papelaria', compact('produtos'));
    }
    public function materiaisinfantis()
    {
        $produtos = Product::where('categoria', 'materiaisinfantis')->get();
        return view('site.materiaisinfantis', compact('produtos'));
    }
}
