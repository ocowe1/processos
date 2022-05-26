<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Processos;

class ProcessosRepository
{

    private $processos;

    public function __construct(Processos $processos)
    {
        $this->processos = $processos;
    }

    public function getProcessos($fields)
    {
        return $this->processos = DB::table('processos')
            ->select('NumeroProcesso', 'NumeroDI', 'DataDI', 'DataDesembaraco', 'DataEntrega')
            ->where('ClienteCodigo', '=', $fields['codigo'])
            ->orderBy('DataDI', 'ASC')
            ->get();
    }

}
