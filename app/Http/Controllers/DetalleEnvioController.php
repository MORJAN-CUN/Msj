<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Estado;
use App\Models\EstadosEnvio;
use App\Models\User;
use App\Models\Envio;

class DetalleEnvioController extends Controller
{
    public function nuevo(Request $request) {
        $usuario = User::find(Auth::user()->id);
        $detalleEnvio = new EstadosEnvio();

        $detalleEnvio->id            = $request->id;
        $detalleEnvio->id_envio      = $request->id_envio;
        $detalleEnvio->id_estado     = $request->id_estado;
        $detalleEnvio->usuario       = $usuario->name;
        $detalleEnvio->observaciones = $request->observaciones;

        $detalleEnvio->save();

        //return 'aca llegamos del show';
        return redirect()->route('envio.mostrar',$detalleEnvio->id_envio);
        //return view('MostrarDetalle',compact(['estado','usuario']));
    }

    public function mostrar($id){
        $estado = Estado::all();
        $usuario = User::find(Auth::user()->id);
        $envio = Envio::find($id);

        //return $envio;
        return view('Asignar',compact(['estado','usuario','envio']));
    }
}
