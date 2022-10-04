<x-slot name="header">
</x-slot>
<div>
    <div class="text-left">
    <!--<img src="{{ asset('/Imagenes/logo-titulo.png?v=1.0')}}" alt="image" width="150">-->
    </div>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        No. Solicitud {{ __($envio->id) }}
    </h2>
</div>
<div class="py-12">
    <div>
        <h4>ORIGEN</h4>
        Sede: {{ $ciudorig['CIU_NOMBRE___'] }}
        <br>
        Remitente: {{ $usuarios['name'] }}
        <br>
        Area: {{ $areaorig['NOMBRE'] }}
        <br>
        Dirección: {{ $sedeorig['DIRECCION1'] }}
        <br>
        Teléfono: {{ $sedeorig['TELEFONO1'] }}
        <br>
        Observación: {{ $envio['desc_remitente'] }}

    </div>
    <div>
        <h4>DESTINO</h4>
        Destinatario: {{ $envio['dire_destino'] }}
        <br>
        Dirección: {{ $envio['dire_destino'] }}
        <br>
        Teléfono: {{ $envio['tele_destino'] }}
        <br>
        Observación: {{ $envio['desc_destinatario'] }}
    </div>
</div>
