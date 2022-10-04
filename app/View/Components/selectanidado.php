<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Ciudades;
use App\Models\Areas;
use App\Models\Sedes;

class selectanidado extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */

    public $selectedCiudad = null,$selectedSede = null,$selectedArea = null;
    public $sede = null, $area = null;

    public function render()
    {
        return view('components.selectanidado',[
            'ciudad' => Ciudades::where('CIU_CODCIU___','015')
        ]);
    }

    public function updatedselectedCiudad($cod_ciud){
        $this->sede = Sedes::where('cod_ciud',$cod_ciud)->get();
    }

    public function updatedselectedSede($cod_sede){
        $this->area = Areas::where('cod_sede',$cod_sede)->get();
    }

}
