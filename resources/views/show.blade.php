<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-100 overflow-hidden shadow-xl sm:rounded-lg">
                <form>
                    <br>
                    @csrf
                    <!--remitentes -->
                    <label class="form-label inline-block mb-2 text-gray-700">
                        Nombre Remitente
                        <br>
                        <input type="text" name = "name" class="
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
                        value="{{ $usuarios->name }}" readonly, disabled>
                    </label>
                    <label class="form-label inline-block mb-2 text-gray-700">
                        Ciudad Remitente
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
                        value="{{ $ciudadRemi->CIU_NOMBRE___ }}" readonly, disabled>
                    </label>
                    <!--destinatarios -->
                    <label class="form-label inline-block mb-2 text-gray-700">
                        Sede Destino
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
                        value="{{ $envio->ciud_destino }}" readonly disabled>
                    </label>
                    <label class="form-label inline-block mb-2 text-gray-700">
                        Área Destino
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
                        value="{{ $envio->area_destino }}" readonly disabled readonly, disabled>
                    </label>
                    <label class="form-label inline-block mb-2 text-gray-700">
                        Persona de Contacto
                        <br>
                        <input type="text" name = "" class="form-select appearance-none
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
                        value="{{ $envio->destinatario }}">
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
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example"
                        value="{{ $envio->tele_destino }}" readonly, disabled>
                    </label>
                    <label class="form-label inline-block mb-2 text-gray-700">
                        Dirección
                        <br>
                        <input type="text" name = "direccion" class="form-select appearance-none
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
                        value="{{ $envio->dire_destino }}" readonly, disabled>
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
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example"
                        value="{{ $envio->temperatura }}" readonly, disabled>
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
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example"
                        value="{{ $envio->desc_remitente }}" readonly, disabled>
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
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example"
                        value="{{ $envio->desc_destino }}" readonly, disabled>
                    </label>
                    <input type="hidden" name = "id" value=" ">
                </form>
                <a href="{{ route('DetalleEnvio.mostrar',$envio->id) }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit">
                     Asignar Solicitud
                </a>
                @if ($envio->tipo_envio == 'E' or $envio->tipo_envio == 'M')
                <a href="{{ route('envio.pdf',$envio->id) }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit">
                    Imprimir
                </a>
                @endif
                <a href="" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit">
                    Recogida mensajero
                </a>
                <a href="" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit">
                    Exportar Excel
                </a>
                <br>
                <br>
                <br>
                <div>
                    <h1>DETALLES</h1>
                </div>
                <table class="min-w-full">
                    <thead class="bg-white border-b">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                <b>Consecutivo</b>
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                <b>Origen</b>
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                <b>Destino</b>
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                <b>Estado</b>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$envio->id}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <b>Origen:</b> {{$usuarios->name}}
                            <br>
                            <b>Ciudad:</b> {{ $ciudadRemi->CIU_NOMBRE___ }}
                            <br>
                            <b>Dirección:</b> {{ $sedeOrigen->DIRECCION1 }}
                            <br>
                            <b>Telefono:</b> {{ $sedeOrigen->TELEFONO1 }}
                            <br>
                            <b>Sede:</b> {{ $sedeOrigen->NOMBRE }}
                            <br>
                            <b>Descripción:</b> {{ $envio->desc_remitente }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            @if ($envio->tipo_envio == 'I' or $envio->tipo_envio == 'C' )
                                <b>Sede:</b> {{$envio->sede_destino}}.
                            @endif
                            <b>Destinatario:</b> {{$envio->destinatario}}.
                            <br>
                            <b>Ciudad:</b> {{ $envio->ciud_destino }}.
                            <br>
                            <b>Dirección:</b> {{ $envio->dire_destino }}.
                            <br>
                            <b>Telefono:</b> {{ $envio->tele_destino }}.
                            <br>
                            @if ($envio->tipo_envio == 'I' or $envio->tipo_envio == 'C' )
                                <b>Sede:</b> {{ $envio->sede_destino }}.
                                <br>
                            @endif
                            <b>Descripción:</b> {{ $envio->desc_destino }}.
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        @foreach ($detalleEnv as $detalleEnvios)
                            {{ $detalleEnvios->id_estado }}:
                            <br>
                        @endforeach
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
