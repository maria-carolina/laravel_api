<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjetoRouanetTeste extends Model
{
    use HasFactory;

    protected $table = "tb_projeto_rouanet_teste";

    protected $fillable = [
        'id_projeto',
        'pronac',
        'ano_projeto',
        'nome',
        'segmento',
        'area',
        'uf',
        'municipio',
        'data_inicio',
        'data_termino',
        'situacao',
        'mecanismos',
        'enquadramento',
        'valor_captado',
        'valor_aprovado',
        'acessibilidade',
        'justificativa',
        'etapa',
        'ficha_tecnica',
        'impacto_ambiental',
        'especificacao',
        'providencia',
        'democratizacao',
        'sinopse',
        'resumo',
        'valor_projeto',
        'outras_fontes',
        'valor_proposta',
        'valor_solicitado',
        'objetivo',
        'extrategia_executiva',
        'link_incentivadores'
    ];
}
