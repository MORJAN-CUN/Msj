<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function nuevo(Request $request) {
        $user = new User();

        $user->id              = $request->id;
        $user->id_usuario_remi = $request->id_usuario_remi;
        $user->tipo_envio      = $request->tipo_envio;
        $user->sede_destino    = $request->sede_destino;
        $user->sede_origen     = $request->sede_origen;
        $user->area_destino    = $request->area_destino;
        $user->destinatario    = $request->destinatario;
        $user->tele_destino    = $request->tele_destino;
        $user->dire_destino    = $request->dire_destino;
        $user->ciud_destino    = $request->ciud_destino;
        $user->temperatura     = $request->temperatura;
        $user->desc_remitente  = $request->desc_remitente;
        $user->desc_destino    = $request->desc_destino;
        $user->alto            = $request->alto;
        $user->ancho           = $request->ancho;
        $user->largo           = $request->largo;
        $user->peso            = $request->peso;
        $user->mail_destino    = $request->mail_destino;

        $user->save();

        return view('show');
    }
}
