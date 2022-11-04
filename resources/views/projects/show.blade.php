<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proyecto: ' . $project->nombreProyecto) }}
        </h2>
    </x-slot>
    <center>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> 
                    <h1 class="titulo">Inicio</h1>
                    <a href="{{route('listarPro')}}" class="btn btn-warning" >REGRESAR</a>
                    <br><br>
                    <table class="table table-info">
                        <tr>
                            <td class="bg-info" align="right"><b>Nombre:</b></td>
                            <td>{{$project->nombreProyecto}}</td>
                        </tr>
                        <tr>
                            <td class="bg-info" align="right"><b>Creado el:</b></td>
                            <td>{{$project->created_at}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg">
                    <table>
                        <tr>
                            <td align="right"><a href="{{route('actor', $project->id)}}" class="btn btn-secondary">AGREGAR ACTOR</a></td>
                            <td align="left"><a href="{{route('artefacto', $project->id)}}" class="btn btn-secondary">AGREGAR ARTEFACTO</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{route('RFuncional', $project->id)}}" class="btn btn-secondary">AGREGAR REQUERIMIENTO FUNCIONAL</a></td>
                            <td><a href="{{route('RNFuncional', $project->id)}}" class="btn btn-secondary">AGREGAR REQUERIMIENTO NO FUNCIONAL</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </center>
</x-app-layout>