<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex max-w-7xl mt-12 max-h-[450px] rounded mx-auto bg-white-300" ><!--Revisar height-->
        <div class="w-1/5 my-5 mt-12 mx-10 h-[200px] rounded-lg bg-blue-500">
            Libros
        </div>
        <div class="w-1/5 my-5 mt-12 mx-6 h-[200px] rounded-lg bg-green-500">
            Mis Préstamos
        </div>
        <div class="w-1/5 my-5 mt-12 mx-6 h-[200px] rounded-lg bg-red-500">
            Adeudos
        </div>
        <div class="w-1/5 my-5 mt-12 mx-6 h-[200px] rounded-lg bg-gray-500">
            Mi Perfil
        </div>
    </div>
</x-app-layout>
