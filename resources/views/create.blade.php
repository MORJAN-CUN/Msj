<x-app-layout>
    <x-slot name="header" class="bg-white">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($nombreTipo) }}
        </h2>

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
            <div class="bg-slate-100 overflow-hidden shadow-xl sm:rounded-lg">
                <br>
                <form action="{{ route('envio.nuevo') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-remi">
                                    <div class="body">
                                        <div class="text">
                                            <div class="author">
                                                REMITENTES -> remitentes
                                                <br>
                                                <label class="form-label inline-block mb-2 text-gray-700">
                                                    Sede
                                                    <br>
                                                    <select name="sede_origen" class="form-select appearance-none
                                                    block
                                                    w-full
                                                    px-3
                                                    py-1.5
                                                    text-base
                                                    font-normal
                                                    text-gray-700
                                                    bg-white bg-clip-padding bg-no-repeat
                                                    border border-solid border-gray-300
                                                    rounded
                                                    transition
                                                    ease-in-out
                                                    m-0
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                                                    @foreach ($sede as $sedes)
                                                        <option name="sede_origen" value="{{$sedes['id']}}" onchange="{{$sedes->id}}">{{$sedes->NOMBRE}}</option>
                                                    @endforeach
                                                    </select>
                                                </label>
                                                <label class="form-label inline-block mb-2 text-gray-700">
                                                    Area -> area
                                                    <br>
                                                    <input name="" class="form-select appearance-none
                                                    block
                                                    w-full
                                                    px-3
                                                    py-1.5
                                                    text-base
                                                    font-normal
                                                    text-gray-700
                                                    bg-white bg-clip-padding bg-no-repeat
                                                    border border-solid border-gray-300
                                                    rounded
                                                    transition
                                                    ease-in-out
                                                    m-0
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example"
                                                    value="{{ $areaRemi->NOMBRE }}" readonly disabled>
                                                </label>
                                                <label class="form-label inline-block mb-2 text-gray-700">
                                                    Contacto Remitente -> contacto remitente
                                                    <br>
                                                    <input type="text" name = "" class="
                                                    form-control
                                                    block
                                                    w-full
                                                    px-3
                                                    py-1.5
                                                    text-base
                                                    font-normal
                                                    text-gray-700
                                                    bg-white bg-clip-padding
                                                    border border-solid border-gray-300
                                                    rounded
                                                    transition
                                                    ease-in-out
                                                    m-0
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                    value="{{ $usuario->name }}" readonly disabled>
                                                </label>
                                                <input type="text" name = "tipo_envio" class="hidden"
                                                    value="{{ $tipo }}">
                                                <input type="text" name = "id_usuario_remi" class="hidden"
                                                value="{{ $usuario->id }}">
                                                <label class="form-label inline-block mb-2 text-gray-700">
                                                    Correo -> correo
                                                    <br>
                                                    <input type="text" class="form-select appearance-none
                                                    block
                                                    w-full
                                                    px-3
                                                    py-1.5
                                                    text-base
                                                    font-normal
                                                    text-gray-700
                                                    bg-white bg-clip-padding bg-no-repeat
                                                    border border-solid border-gray-300
                                                    rounded
                                                    transition
                                                    ease-in-out
                                                    m-0
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example"
                                                    value="{{ $usuario->email }}" readonly disabled>
                                                </label>
                                                <label class="form-label inline-block mb-2 text-gray-700">
                                                    Telefono
                                                    <br>
                                                    <input type="text" class="form-select appearance-none
                                                    block
                                                    w-full
                                                    px-3
                                                    py-1.5
                                                    text-base
                                                    font-normal
                                                    text-gray-700
                                                    bg-white bg-clip-padding bg-no-repeat
                                                    border border-solid border-gray-300
                                                    rounded
                                                    transition
                                                    ease-in-out
                                                    m-0
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example"
                                                    value="{{ $usuario->num_celu }}" readonly disabled>
                                                </label>
                                                <label class="form-label inline-block mb-2 text-gray-700">
                                                    Ciudad
                                                    <br>
                                                    <input name="" class="form-select appearance-none
                                                    block
                                                    w-full
                                                    px-3
                                                    py-1.5
                                                    text-base
                                                    font-normal
                                                    text-gray-700
                                                    bg-white bg-clip-padding bg-no-repeat
                                                    border border-solid border-gray-300
                                                    rounded
                                                    transition
                                                    ease-in-out
                                                    m-0
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example"
                                                    value="{{ $ciudadRemi->CIU_NOMBRE___ }}" readonly disabled
                                                    >
                                                </label>
                                                @if ($tipo == 'C' )
                                                <label class="form-label inline-block mb-2 text-gray-700">
                                                    Largo
                                                    <br>
                                                    <input type="text" name = "largo" class="form-select appearance-none
                                                    block
                                                    w-full
                                                    px-3
                                                    py-1.5
                                                    text-base
                                                    font-normal
                                                    text-gray-700
                                                    bg-white bg-clip-padding bg-no-repeat
                                                    border border-solid border-gray-300
                                                    rounded
                                                    transition
                                                    ease-in-out
                                                    m-0
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                                                </label>
                                                <label class="form-label inline-block mb-2 text-gray-700">
                                                    Ancho
                                                    <br>
                                                    <input type="text" name = "ancho" class="form-select appearance-none
                                                    block
                                                    w-full
                                                    px-3
                                                    py-1.5
                                                    text-base
                                                    font-normal
                                                    text-gray-700
                                                    bg-white bg-clip-padding bg-no-repeat
                                                    border border-solid border-gray-300
                                                    rounded
                                                    transition
                                                    ease-in-out
                                                    m-0
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                                                </label>
                                                <label class="form-label inline-block mb-2 text-gray-700">
                                                    Alto
                                                    <br>
                                                    <input type="text" name = "alto" class="form-select appearance-none
                                                    block
                                                    w-full
                                                    px-3
                                                    py-1.5
                                                    text-base
                                                    font-normal
                                                    text-gray-700
                                                    bg-white bg-clip-padding bg-no-repeat
                                                    border border-solid border-gray-300
                                                    rounded
                                                    transition
                                                    ease-in-out
                                                    m-0
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                                                </label>
                                                <label class="form-label inline-block mb-2 text-gray-700">
                                                    Peso
                                                    <br>
                                                    <input type="text" name = "peso" class="form-select appearance-none
                                                    block
                                                    w-full
                                                    px-3
                                                    py-1.5
                                                    text-base
                                                    font-normal
                                                    text-gray-700
                                                    bg-white bg-clip-padding bg-no-repeat
                                                    border border-solid border-gray-300
                                                    rounded
                                                    transition
                                                    ease-in-out
                                                    m-0
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                                                </label>
                                                @endif
                                                <label class="form-label inline-block mb-2 text-gray-700">
                                                    Temperatura
                                                    <br>
                                                    <input type="number" name = "temperatura" class="form-select appearance-none
                                                    block
                                                    w-full
                                                    px-3
                                                    py-1.5
                                                    text-base
                                                    font-normal
                                                    text-gray-700
                                                    bg-white bg-clip-padding bg-no-repeat
                                                    border border-solid border-gray-300
                                                    rounded
                                                    transition
                                                    ease-in-out
                                                    m-0
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                                                </label>
                                                <br>
                                                    Descripción Remitente
                                                    <br>
                                                    <textarea name = "desc_remitente" class="form-select appearance-none
                                                    block
                                                    w-full
                                                    px-3
                                                    py-1.5
                                                    text-base
                                                    font-normal
                                                    text-gray-700
                                                    bg-white bg-clip-padding bg-no-repeat
                                                    border border-solid border-gray-300
                                                    rounded
                                                    transition
                                                    ease-in-out
                                                    m-0
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-6">
                    DESTINATARIOS
                    <br>
                    @if ($tipo == 'I' or $tipo == 'C' )
                        <br>
                        <label class="form-label inline-block mb-2 text-gray-700 ">
                            Sede
                            <br>
                            <select name="sede_destino" class="form-select appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                                @foreach ($sede as $sedes)
                                    <option name="sede_destino" value="{{$sedes['id']}}" onchange="{{$sedes->id}}">{{$sedes->NOMBRE}}</option>
                                @endforeach
                            </select>
                        </label>
                        <label class="form-label inline-block mb-2 text-gray-700">
                            Área
                            <br>
                            <select name = "area_destino" class="form-select appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                                @foreach ($area as $areas)
                                    <option name="area_destino" value="{{$areas['id']}}" onchange="{{$areas->id}}">{{$areas->NOMBRE}}</option>
                                @endforeach
                            </select>
                        </label>
                        <label class="form-label inline-block mb-2 text-gray-700">
                            Contacto
                            <br>
                            <select name="destinatario" class="form-select appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                            @foreach ($usuaRemi as $usuaRemis)
                                <option name="destinatario" value="{{$usuaRemis['name']}}" onchange="{{$usuaRemis->name}}">{{$usuaRemis->name}}</option>
                            @endforeach
                            </select>
                        </label>
                        <label class="form-label inline-block mb-2 text-gray-700">
                            Correo
                            <br>
                            <input type="mail" name = "mail_destino" class="form-select appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        </label>
                        <label class="form-label inline-block mb-2 text-gray-700">
                            Dirección
                            <br>
                            <input type="text" name = "dire_destino" class="form-select appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        </label>
                        <label class="form-label inline-block mb-2 text-gray-700">
                            Teléfono
                            <br>
                            <input type = "number" name="tele_destino" class="form-select appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        </label>
                        <label class="form-label inline-block mb-2 text-gray-700">
                            Ciudad
                            <br>
                            <select name="ciud_destino" class="form-select appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                            @foreach ($ciudad as $ciudades)
                                <option name="ciud_destino" value="{{$ciudades['CIU_NOMBRE___']}}" onchange="{{$ciudades->CIU_NOMBRE___}}">{{$ciudades->CIU_NOMBRE___}}</option>
                            @endforeach
                            </select>
                        </label>
                    @else
                        <label class="form-label inline-block mb-2 text-gray-700">
                            Persona de Contacto
                            <br>
                            <input type="text" name = "destinatario" class="form-select appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        </label>
                        <label class="form-label inline-block mb-2 text-gray-700">
                            Dirección
                            <br>
                            <input type="text" name = "dire_destino" class="form-select appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        </label>
                        <label class="form-label inline-block mb-2 text-gray-700">
                            Telefono
                            <br>
                            <input type = "number" name="tele_destino" class="form-select appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        </label>
                        <label class="form-label inline-block mb-2 text-gray-700">
                            Ciudad
                            <br>
                            <select name="ciud_destino" class="form-select appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                            @foreach ($ciudad as $ciudades)
                                <option name="ciud_destino" value="{{$ciudades['CIU_NOMBRE___']}}" onchange="{{$ciudades->CIU_NOMBRE___}}">{{$ciudades->CIU_NOMBRE___}}</option>
                            @endforeach
                            </select>
                        </label>
                        <label class="form-label inline-block mb-2 text-gray-700">
                            Correo
                            <br>
                            <input type="mail" name = "mail_destino" class="form-select appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        </label>
                    @endif
                    <br>
                        Descripción Destinatario
                        <br>
                        <textarea name = "desc_destino" class="form-select appearance-none
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        </textarea>
                    <br>
                    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit">
                        Guardar
                    </button>
                </form>

                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-x-auto">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

