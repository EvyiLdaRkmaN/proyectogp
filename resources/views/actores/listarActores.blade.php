<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actores') }}
        </h2>
    </x-slot>
 
    <center>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <h1>LISTA DE ACTORES</h1>
                    <table class="table table-info">
                        <td class="bg-info" align="center"><b>CLAVE</b></td>
                        <td class="bg-info" align="center"><b>NOMBRE</b></th>
                        <td class="bg-info" align="center"><b>DESCRIPCIÓN</b></th>
                        <td class="bg-info" align="center"><b>CARACTERISTICAS</b></th>
                        <td class="bg-info" align="center"><b>RESPONSABILIDAD</b></th>
                        <td class="bg-info" align="center"><b>REFERENCIAS</b></th>
                        <td class="bg-info" align="center"><b>OPCIONES</b></th>
                    @foreach ($actores as $actor)
                        @if ($actor->idProyecto == $project->id)
                            <tr>
                                <td align="center">{{$actor->clave}}</td>
                                <td align="center">{{$actor->nombre}}</td>
                                <td align="center">{{$actor->descripcion}}</td>
                                <td align="center">{{$actor->caracteristicas}}</td>
                                <td align="center">{{$actor->responsabilidad}}</td>
                                <td align="center">{{$actor->referencias}}</td>
                                <td align="center">
                                    <a href="{{route('actores.show', array($project->id, $actor->id))}}" class="btn btn-outline-primary" title="View">
                                        <img src="https://cdn-icons-png.flaticon.com/512/64/64999.png" width="20" height="20">
                                    </a>
                                </td>
                            </tr> 
                        @endif
                    @endforeach
                    </table>
                    {{$actores->links()}}
                    <br><br>
                    <a href="{{route('actor', $project->id)}}"><button class="btn btn-warning">Regresar</button></a>
                </div>
            </div>
        </div>
    </center>
    
</x-app-layout>