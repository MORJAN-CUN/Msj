<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use App\Models\Ciudades;
use App\Models\Areas;
use App\Models\Sedes;

use function GuzzleHttp\Promise\all;

class RegisterController extends Controller
{
    public function showRegistrationForm(){
        $ciudad = Ciudades::all();
        $sede = Sedes::all();
        $area = Areas::all();

        return view('auth.register',compact(['ciudad','area','sede']));
    }
}
