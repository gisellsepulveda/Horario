<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        <!-- Menú de navegación -->
        <nav class="mt-4 border-b border-gray-200">
            <ul class="flex space-x-6 text-gray-600">
                <li>
                    <a href="{{ route('dashboard') }}"
                       class="pb-2 inline-block border-b-2 border-transparent hover:border-indigo-500 hover:text-indigo-600 transition">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('productos.index') }}"
                       class="pb-2 inline-block border-b-2 border-transparent hover:border-indigo-500 hover:text-indigo-600 transition">
                        Productos
                    </a>
                </li>
                <li>
                    <a href="{{ route('horarios.index') }}"
                       class="pb-2 inline-block border-b-2 border-transparent hover:border-indigo-500 hover:text-indigo-600 transition">
                        Horarios
                    </a>
                </li>
                <li>
                    <a href="{{ route('docentes.index') }}"
                       class="pb-2 inline-block border-b-2 border-transparent hover:border-indigo-500 hover:text-indigo-600 transition">
                        Docentes
                    </a>
                </li>
                <li>
                    <a href="{{ route('actividades.index') }}"
                       class="pb-2 inline-block border-b-2 border-transparent hover:border-indigo-500 hover:text-indigo-600 transition">
                        Actividades
                    </a>
                </li>
                <li>
                    <a href="{{ route('personas.index') }}"
                       class="pb-2 inline-block border-b-2 border-transparent hover:border-indigo-500 hover:text-indigo-600 transition">
                        Personas
                    </a>
                </li>
            </ul>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>

