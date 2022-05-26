<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processos extends Model
{
    use HasFactory;

    protected $fillable = [
        'ProcessoID',
        'ClienteCodigo',
        'DespachanteID',
        'TerminalAtracacaoID',
        'NumeroProcesso',
        'NumeroDI',
        'DataDI',
        'DataLI',
        'DataDesembaraco',
        'DataEntrega',
        'DataFechamento',
        'Ativo'
    ];
}
