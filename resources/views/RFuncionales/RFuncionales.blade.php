<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <img src="https://cdn-icons-png.flaticon.com/512/6823/6823086.png" width="25" height="25">
            {{ __('RFuncionales') }}
        </h2>
    </x-slot>
    <style>
        .label{
            text-align: end
        }
    </style>
    <center>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <h1>AGREGAR REQUERIMIENTOS FUNCIONALES </h1>
                    <form action="{{route('addRF',$project->id)}}" method="POST">
                        @csrf
                            <table>
                                <tr>
                                    <td class="label">
                                        <label for="">Clave:</label>
                                    </td>
                                    <td>
                                        <input name="claveRF" type="text"  placeholder="Ejem: RF.01" size="30">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">
                                        <label for="">Descripcion</label>
                                    </td>
                                    <td>
                                        <textarea name="descRF" id="" cols="30" rows="2"></textarea>
                                    </td>
                                </tr>
                                <tr>
                            
                                    <td>
                                        <input name="idProyecto" type="hidden" value="{{$project->id}}">
                                    </td>
                                </tr>
                            </table>
                            <button class="btn btn-success">AGREGAR</button><br>
                    </form>
                    <a class="btn btn-primary" href="{{route('listarRF', $project->id)}}">LISTA DE REQUERIMIENTOS FUNCIONALES</a>
                    <a class="btn btn-danger" href="{{route('projects.show', $project->id)}}">REGRESAR</a>
                </div>
            </div>
        </div>
    </center>
</x-app-layout>