<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Muestras') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-100 overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('envio.crear','M') }}" method="POST">
                    @csrf
                    <label class="form-label inline-block mb-2 text-gray-700">
                        Identificación
                        <br>
                        <input type="number" name = "id_usuario_remi" class="
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
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
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
                            <option>Ciudades</option>
                            @foreach ($ciudad as $ciudades)
                                <option value="{{$ciudades['CIU_CODCIU___']}}">{{$ciudades->CIU_NOMBRE___}}</option>
                            @endforeach
                        </select>
                    </label>
                    <label class="form-label inline-block mb-2 text-gray-700">
                        Sede Destino
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
                            <option>Sedes</option>
                            @foreach ($sede as $sedes)
                                <option value="{{$sedes['COD_SEDE']}}">{{$sedes->NOMBRE}}</option>
                            @endforeach
                            </select>
                    </label>
                    <label class="form-label inline-block mb-2 text-gray-700">
                        Área Destino
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
                            <option name="area_destino">Areas</option>
                            @foreach ($area as $areas)
                                <option name="area_destino" value="{{$areas['COD_AREA']}}" onchange="{{$areas->COD_AREA}}">{{$areas->NOMBRE}}</option>
                            @endforeach
                        </select>
                    </label>
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
                        Celular
                        <br>
                        <input type="number" name = "tele_destino" class="form-select appearance-none
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
                    <label class="form-label inline-block mb-2 text-gray-700">
                        Descripción Remitente
                        <br>
                        <input type="text" name = "desc_remitente" class="form-select appearance-none
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
                        Descripción Destinatario
                        <br>
                        <input type="text" name = "desc_destino" class="form-select appearance-none
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
                    <input type="hidden" name = "tipo_envio" value="{{$tipo}}">
                    <input type="hidden" name = "id" value=" ">
                    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit">
                        Guardar
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
