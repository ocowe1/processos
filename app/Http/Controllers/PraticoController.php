<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProcessosRepository;
use Illuminate\Support\Facades\Validator;

class PraticoController extends Controller
{

    private $processosRepository;
    private $request;

    public function __construct(ProcessosRepository $processosRepository, Request $request)
    {
        $this->processosRepository = $processosRepository;
        $this->request = $request;
    }

    public function VerificaCodigo()
    {
        $this->request->validate(
            [
                'codigo' => 'required|min:4',
            ],
            [
                'codigo.required' => 'Código de cliente necessário!',
                'codigo.min' => 'Caracteres mínimos necessários para acessar os processos são de 4 digitos!'
            ]
        );

        $codigo = $this->request->get('codigo');
        $fields['codigo'] = $codigo;
        $processos = $this->processosRepository->getProcessos($fields);
        return view('processos', compact(['processos', 'codigo']));
    }
}
