<?php

namespace App\Http\Controllers;

use App\Models\Ciudades;
use Illuminate\Http\Request;

class CiudadesController extends Controller
{
    public function nuevo(Request $request) {
        $ciudad = new Ciudades();

        $ciudad->CIU_DPT_PAI_CODPAIS__ = $request->CIU_DPT_PAI_CODPAIS__;
        $ciudad->CIU_DPT_CODDEPTO_     = $request->CIU_DPT_CODDEPTO_;
        $ciudad->CIU_CODCIU___         = $request->CIU_CODCIU___;
        $ciudad->CIU_CODUNI___         = $request->CIU_CODUNI___;
        $ciudad->CIU_NOMBRE___         = $request->CIU_NOMBRE___;
        $ciudad->CIU_ESTADO___         = $request->CIU_ESTADO___;
        $ciudad->CIU_USUCRE___         = $request->CIU_USUCRE___;
        $ciudad->CIU_FECCRE___         = $request->CIU_FECCRE___;
        $ciudad->CIU_USUMOD___         = $request->CIU_USUMOD___;
        $ciudad->CIU_FECMOD___         = $request->CIU_FECMOD___;

        return redirect('envio.show',$ciudad->CIU_CODCIU___);
    }

    public function consultar() {

        $ciudad = Ciudades::all();

        return $ciudad;
    }

    public function crear($ciudad){
        $ciudad = Ciudades::all();

        return $ciudad;
    }
}
