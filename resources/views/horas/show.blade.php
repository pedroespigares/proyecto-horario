<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asignaturas') }}
        </h2>
    </x-slot>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: center;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" style="display: flex; justify-content:space-between; align-items: center">
                    {{ __("Datos asignatura ") }}{{ $hora->nombreAs }}
                    <a href="{{ route('horas') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ver horas</a>
                </div>
            </div>
        </div>
    </div>
    <table style="width:50vw; margin: 0 auto;">
        <tr>
            <th>Asignatura</th>
            <th>Día</th>
            <th>Hora</th>
        </tr>
        <tr>
            <td>{{$hora->nombreCortoAs}}</td>
            <td>
                @switch ($hora->diaH)
                @case (1)
                    <p> Lunes</p>
                    @break
                @case (2)
                    <p> Martes</p>
                    @break
                @case (3)
                    <p> Miercoles</p>
                    @break
                @case (4)
                    <p> Jueves</p>
                    @break
                @case (5)
                    <p> Viernes</p>
                    @break
                @endswitch
            </td>
            <td>
                @switch ($hora->horaH)
                @case (1)
                    <p> 8:15 - 9:15</p>
                    @break
                @case (2)
                    <p> 9:15 - 10:15</p>
                    @break
                @case (3)
                    <p> 10:15 - 11:15</p>
                    @break
                @case (4)
                    <p> 11:45 - 12:45</p>
                    @break
                @case (5)
                    <p> 12:45 - 13:45</p>
                    @break
                @case (6)
                    <p> 13:45 - 14:45</p>
                    @break
                @endswitch
            </td>
        </tr>
    </div>
</x-app-layout>