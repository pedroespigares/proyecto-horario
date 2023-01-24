<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
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
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Bienvenido ") }}{{Auth::user()->name}}{{ __(", este es tu horario") }}
                </div>
            </div>
        </div>
    </div>

    <div style="display: flex; justify-content:center; text-align: center;">
        <table>
            <thead>
                <th>HORAS</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miércoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
            </thead>
            <tbody>
                <tr>
                    {{-- PRIMERA HORA --}}

                    <td>8:15 - 9:15</td>
                    @if ($lunesPrimeraHora != null)
                        <td style="background-color: {{$lunesPrimeraHora->colorAs}}">{{$lunesPrimeraHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($martesPrimeraHora != null)
                        <td style="background-color: {{$martesPrimeraHora->colorAs}}">{{$martesPrimeraHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($miercolesPrimeraHora != null)
                        <td style="background-color: {{$miercolesPrimeraHora->colorAs}}">{{$miercolesPrimeraHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($juevesPrimeraHora != null)
                        <td style="background-color: {{$juevesPrimeraHora->colorAs}}">{{$juevesPrimeraHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($viernesPrimeraHora != null)
                        <td style="background-color: {{$viernesPrimeraHora->colorAs}}">{{$viernesPrimeraHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif
                </tr>


                <tr>

                    {{-- SEGUNDA HORA --}}
                    <td>9:15 - 10:15</td>
                    @if ($lunesSegundaHora != null)
                        <td style="background-color: {{$lunesSegundaHora->colorAs}}">{{$lunesSegundaHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($martesSegundaHora != null)
                        <td style="background-color: {{$martesSegundaHora->colorAs}}">{{$martesSegundaHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($miercolesSegundaHora != null)
                        <td style="background-color: {{$miercolesSegundaHora->colorAs}}">{{$miercolesSegundaHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($juevesSegundaHora != null)
                        <td style="background-color: {{$juevesSegundaHora->colorAs}}">{{$juevesSegundaHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($viernesSegundaHora != null)
                        <td style="background-color: {{$viernesSegundaHora->colorAs}}">{{$viernesSegundaHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif
                </tr>


                
                <tr>

                    {{-- TERCERA HORA --}}
                    <td>10:15 - 11:15</td>
                    @if ($lunesTerceraHora != null)
                        <td style="background-color: {{$lunesTerceraHora->colorAs}}">{{$lunesTerceraHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($martesTerceraHora != null)
                        <td style="background-color: {{$martesTerceraHora->colorAs}}">{{$martesTerceraHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($miercolesTerceraHora != null)
                        <td style="background-color: {{$miercolesTerceraHora->colorAs}}">{{$miercolesTerceraHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($juevesTerceraHora != null)
                        <td style="background-color: {{$juevesTerceraHora->colorAs}}">{{$juevesTerceraHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($viernesTerceraHora != null)
                        <td style="background-color: {{$viernesTerceraHora->colorAs}}">{{$viernesTerceraHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif
                </tr>


                <tr>
                    <td>11:15 - 11:45</td>  
                    <td colspan="5" style="background-color: gray">Recreo</td>
                </tr>


                <tr>

                    {{-- CUARTA HORA --}}
                    <td>11:45 - 12:45</td>
                    @if ($lunesCuartaHora != null)
                        <td style="background-color: {{$lunesCuartaHora->colorAs}}">{{$lunesCuartaHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($martesCuartaHora != null)
                        <td style="background-color: {{$martesCuartaHora->colorAs}}">{{$martesCuartaHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($miercolesCuartaHora != null)
                        <td style="background-color: {{$miercolesCuartaHora->colorAs}}">{{$miercolesCuartaHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($juevesCuartaHora != null)
                        <td style="background-color: {{$juevesCuartaHora->colorAs}}">{{$juevesCuartaHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($viernesCuartaHora != null)
                        <td style="background-color: {{$viernesCuartaHora->colorAs}}">{{$viernesCuartaHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif
                </tr>


                <tr>

                    {{-- QUINTA HORA --}}
                    <td>12:45 - 13:45</td>
                    @if ($lunesQuintaHora != null)
                        <td style="background-color: {{$lunesQuintaHora->colorAs}}">{{$lunesQuintaHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($martesQuintaHora != null)
                        <td style="background-color: {{$martesQuintaHora->colorAs}}">{{$martesQuintaHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($miercolesQuintaHora != null)
                        <td style="background-color: {{$miercolesQuintaHora->colorAs}}">{{$miercolesQuintaHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($juevesQuintaHora != null)
                        <td style="background-color: {{$juevesQuintaHora->colorAs}}">{{$juevesQuintaHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($viernesQuintaHora != null)
                        <td style="background-color: {{$viernesQuintaHora->colorAs}}">{{$viernesQuintaHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif
                </tr>
                

                <tr>

                    {{-- SEXTA HORA --}}
                    <td>13:45 - 14:45</td>
                    @if ($lunesSextaHora != null)
                        <td style="background-color: {{$lunesSextaHora->colorAs}}">{{$lunesSextaHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($martesSextaHora != null)
                        <td style="background-color: {{$martesSextaHora->colorAs}}">{{$martesSextaHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($miercolesSextaHora != null)
                        <td style="background-color: {{$miercolesSextaHora->colorAs}}">{{$miercolesSextaHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($juevesSextaHora != null)
                        <td style="background-color: {{$juevesSextaHora->colorAs}}">{{$juevesSextaHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif

                    @if ($viernesSextaHora != null)
                        <td style="background-color: {{$viernesSextaHora->colorAs}}">{{$viernesSextaHora->nombreCortoAs}}</td>
                    @else
                        <td>Vacío</td>
                    @endif
                </tr>
            </tbody>
        </table>
</x-app-layout>
