<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($nombreTipo) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-100 overflow-hidden shadow-xl sm:rounded-lg">
                <br>
                <form action="{{ route('envio.nuevo') }}" method="POST">
                    @csrf
                    REMITENTES
                    <br>
                    <label class="form-label inline-block mb-2 text-gray-700">
                        Área
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
                        Contacto Remitente
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
                    <input type="number" name = "id_usuario_remi" class="hidden"
                        value="{{ $usuario->id }}">
                    <label class="form-label inline-block mb-2 text-gray-700">
                        Correo
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
                        value="{{ $ciudadRemi->CIU_NOMBRE___ }}" readonly disabled>
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
                        <input type="text" name = "Peso" class="form-select appearance-none
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
                    <br>
                    <br>
                    DESTINATARIOS
                    <br>
                    @if ($tipo == 'I' or $tipo == 'C' )
                        <br>
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
                            Dirección :: direccion -> direccion
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
                            Telefono :: telefono -> telefono
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
                            Correo :: correo -> correo
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
                    <label class="form-label inline-block mb-2 text-gray-700">
                        Descripción Destinatario :: Descripcion destinatario -> descripcion destinatario
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
