<?php

namespace App\Http\Controllers;

use App\Models\Envio;
use App\Models\Ciudades;
use App\Models\Sedes;
use App\Models\Areas;
use App\Models\Estado;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;
use App\Models\EstadosEnvio;
use App\Models\Usuario;
use Barryvdh\DomPDF\Facade as PDF;

class EnvioController extends Controller
{
    public function nuevo(Request $request) {
        $usuarios   = User::find(Auth::user()->id);
        $envio = new Envio();

        $envio->id              = $request->id;
        $envio->id_usuario_remi = $request->id_usuario_remi;
        $envio->tipo_envio      = $request->tipo_envio;
        $envio->sede_origen     = $request->sede_origen;
        $envio->sede_destino    = $request->sede_destino;
        $envio->area_destino    = $request->area_destino;
        $envio->destinatario    = $request->destinatario;
        $envio->tele_destino    = $request->tele_destino;
        $envio->dire_destino    = $request->dire_destino;
        $envio->ciud_destino    = $request->ciud_destino;
        $envio->temperatura     = $request->temperatura;
        $envio->desc_remitente  = $request->desc_remitente;
        $envio->desc_destino    = $request->desc_destino;
        $envio->alto            = $request->alto;
        $envio->ancho           = $request->ancho;
        $envio->largo           = $request->largo;
        $envio->peso            = $request->peso;
        $envio->mail_destino    = $request->mail_destino;

        $envio->save();

        //return $envio->id;
        //return redirect()->route('envio.mostrar',$envio->id);
        $usuarios   = User::find(Auth::user()->id);
        $areaDestino= Areas::find($envio->area_destino);
        $sedeDestino= Sedes::find($envio->sede_destino);
        $ciudadRemi = Ciudades::find($usuarios->cod_ciud);
        $ciudadDest = Ciudades::find($envio->ciud_destino);
        $detalleEnv = EstadosEnvio::all()->where('id_envio',$envio->id);
        $sedeOrigen = Sedes::find($envio->sede_origen);

        //$estadoDet  = Estado::all()->where('id','in',$detalleEnv->id_estado);

        return view('show',compact(['envio','usuarios','areaDestino','sedeDestino',
                                    'ciudadRemi','ciudadDest','detalleEnv','sedeOrigen']));
    }

    public function mostrar($id){
        $envio      = Envio::find($id);
        $usuarios   = User::find(Auth::user()->id);
        $areaDestino= Areas::find($envio->area_destino);
        $sedeDestino= Sedes::find($envio->sede_destino);
        $ciudadRemi = Ciudades::find($usuarios->cod_ciud);
        $ciudadDest = Ciudades::find($envio->ciud_destino);
        $detalleEnv = EstadosEnvio::all()->where('id_envio',$id);
        $sedeOrigen = Sedes::find($envio->sede_origen);
        //$estado     = Estado::all()->find($detalleEnv['id_estado']);

        //$estadoDet  = Estado::all()->where('id','in',$detalleEnv->id_estado);
        return view('show',compact(['envio','usuarios','areaDestino','sedeDestino',
                                    'ciudadRemi','ciudadDest','detalleEnv','sedeOrigen']));
    }

    public function editar($id){
        $envio = Envio::find($id);

        return view('editar',compact('envio'));
    }

    public function crear(){
        //$envio      = Envio::find($id);
        $ciudad     = Ciudades::all();
        $area       = Areas::all();
        $sede       = Sedes::all();
        $usuarios   = User::find(Auth::user()->id);

        return 'llega aca';
        //$sedeRemi   = Sedes::all('NOMBRE')->where('COD_SEDE','=', $usuario->COD_SEDE);

        //return view('create',compact(['tipo','ciudad','area','sede','usuario']));
    }

    public function pdf($id){
        $usuarios = User::find(Auth::user()->id);
        $envio = Envio::findorfail($id);
        $sedeorig = Sedes::find($envio->sede_origen);
        $sededest = Sedes::find($envio->sede_destino);
        $ciudorig = Ciudades::find($sedeorig['COD_CIUD']);
        $ciuddest = Ciudades::find($sededest['COD_CIUD']);
        $areaorig = Areas::find($usuarios->cod_area);
        $areadest = Areas::findorfail($envio->areaDestino);
        //view()->share('Asignar', $usuarios);
        //$pdf = PDF::loadView('pdf',compact('usuarios','envio','sedeorig','sededest',
        //                                   'ciudorig','ciuddest','areaorig','areadest'))->setOptions(['defaultFont' => 'sans-serif']);
        //$pdf->loadHTML('<h1>test</h1>');

        //return $pdf->stream('pdf');

        return 'Esta es la impresión del pdf';
    }
}
