<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() 
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '0'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
            ]
        ];

        $teste;

        //condicao ? se verdadeiro : se falso;

        $msg = isset($fornecedores[1]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';
        echo $msg;

        return view('app.fornecedor.index', get_defined_vars());
    }
}
