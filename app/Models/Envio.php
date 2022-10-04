<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    use HasFactory;

    protected $table = 'co_envios';

    protected $fillable = [
        'id_usuario_remi',
        'tipo_envio',
        'sede_origen',
        'destinatario',
        'tele_destino',
        'ciud_destino',
        'mail_destino',
    ];
}
