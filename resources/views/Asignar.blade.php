<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-100 overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('DetalleEnvio.nuevo') }}" method="POST">
                    @csrf
                    <br>
                    <label class="form-label inline-grid mb-2 text-gray-700">
                        Estado
                        <br>
                        <select name="id_estado" class="form-select appearance-none
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
                        <option>--</option>
                        @foreach ($estado as $estados)
                            <option name="id_estado" value="{{$estados['id']}}" onchange="{{$estados->id}}">{{$estados['NOMBRE']}}</option>
                        @endforeach
                        </select>
                    </label>
                    <br>
                    Observaciones
                    <br>
                    <textarea name = "observaciones" class="form-select appearance-none
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
                    <input type="text" name = "id_envio" class="hidden" value="{{ $envio['id'] }}">
                    <br>
                    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit">
                        Guardar
                    </button>
                </form>
                <div class="py-2">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
