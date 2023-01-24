<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Horas') }}
        </h2>
    </x-slot>
    <style>
        table{
            margin-bottom: 5rem;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
        }
        input:hover{
            cursor: pointer;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" style="display: flex; justify-content:space-between; align-items: center">
                    {{ __("Estas son tus horas") }}
                    <form action="horas" method="GET">
                        <select name="asignatura" id="asignatura">
                            <option value="0">Todas</option>
                            @foreach ($asignaturas as $asignatura)
                                <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreCortoAs }}</option>
                            @endforeach
                        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-5" type="submit" value="Filtrar">
                    </form>
                    <a href="{{ route('horas.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Añadir hora</a>
                </div>
            </div>
        </div>
    </div>
    <div style="display: flex; justify-content:center">
        <table>
            <tr>
                <th>Asignatura</th>
                <th>Dia</th>
                <th>Hora</th>
                <th>Acciones</th>
            </tr>
            @foreach ($horas as $singleHora)
                <tr>
                    <td>{{ $singleHora->nombreCortoAs }}</td>
                        @switch($singleHora->diaH)
                            @case(1)
                                <td>Lunes</td>
                                @break
                            @case(2)
                                <td>Martes</td>
                                @break
                            @case(3)
                                <td>Miércoles</td>
                                @break
                            @case(4)
                                <td>Jueves</td>
                                @break
                            @case(5)
                                <td>Viernes</td>
                                @break
                        @endswitch
                    @switch($singleHora->horaH)
                        @case(1)
                            <td>8:15 - 9:15</td>
                            @break
                        @case(2)
                            <td>9:15 - 10:15</td>
                            @break
                        @case(3)
                            <td>10:15 - 11:15</td>
                            @break
                        @case(4)
                            <td>11:45 - 12:45</td>
                            @break
                        @case(5)
                            <td>12:45 - 13:45</td>
                            @break
                        @case(6)
                            <td>13:45 - 14:45</td>
                            @break
                    @endswitch
                    <td>
                        <a href="./horas/show/{{$singleHora->diaH}}/{{$singleHora->horaH}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Ver</a>
                        <a href="./horas/edit/{{$singleHora->diaH}}/{{$singleHora->horaH}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                        <a href="./horas/delete/{{$singleHora->codAs}}/{{$singleHora->diaH}}/{{$singleHora->horaH}}" onclick="confirmDelete()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <script>
        function confirmDelete() {
            return confirm("¿Estás seguro de que quieres eliminar esta hora?");
        }
    </script>
</x-app-layout>
