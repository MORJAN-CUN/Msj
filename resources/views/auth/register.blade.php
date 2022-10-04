<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <x-jet-label for="num_docu" value="{{ __('Identificación') }}" />
                <x-jet-input id="num_docu" class="block mt-1 w-full" type="text" name="num_docu" :value="old('num_docu')" required autofocus autocomplete="name" />
            </div>
            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div>
                <x-jet-label for="num_celu" value="{{ __('Celular') }}" />
                <x-jet-input id="num_celu" class="block mt-1 w-full" type="text" name="num_celu" :value="old('num_celu')" required />
            </div>
            <div>
                <x-jet-label for="tip_usua" value="{{ __('Tipo de usuario') }}" />
                <select name="tip_usua" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="A">Administrador</option>
                    <option value="C">Auxiliar Correspondencia</option>
                    <option value="M">Mensajero</option>
                </select>
            </div>
            <div>
                <x-jet-label for="cod_ciud" value="{{ __('Ciudad') }}" />
                <select wire:model="selectedCiudad" name="cod_ciud" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option name="" value="" onchange="">Ciudad</option>
                    @foreach ($ciudad as $ciudades)
                        <option name="cod_ciud" value="{{$ciudades['CIU_CODCIU___']}}" onchange="{{$ciudades->CIU_CODCIU___}}">{{$ciudades->CIU_NOMBRE___}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <x-jet-label for="cod_sede" value="{{ __('Sede') }}" />
                <select wire:model="selectedSede" name="cod_sede" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="">Sede</option>
                    @foreach ($sede as $sedes)
                        <option value="{{$sedes['id']}}">{{$sedes->NOMBRE}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <x-jet-label for="cod_area" value="{{ __('Area') }}" />
                <select wire:model = "selectedArea" name="cod_area" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option name="" value="" onchange="">Area</option>
                    @foreach ($area as $areas)
                        <option name="cod_area" value="{{$areas['id']}}" onchange="{{$areas->id}}">{{$areas->NOMBRE}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>
            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>
                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('Already registered?') }}
                </a>
                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
        </x-jet-authentication-card>
</x-guest-layout>
@section('scripts')
    <script src="/js/combos.js"></script>
@endsection
