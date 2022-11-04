<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('RFuncionales') }}
        </h2>
    </x-slot>
 
    <center>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    
                    <h1>LISTA DE REQUERIMIENTOS FUNCIONALES</h1>
    
                    <table class="table table-info">
                        <td class="bg-info" align="center"><b>CLAVE</b></td>
                        <td class="bg-info" align="center"><b>DESCRIPCIÓN</b></th>
                        <td class="bg-info" align="center"><b>OPCIONES</b></th>
    
                    @foreach ($RFuncionales as $RFuncional)
                        @if($RFuncional->idProyecto == $project->id)
                            <tr>
                                <td align="center">{{$RFuncional->clave}}</td>
                                <td align="center">{{$RFuncional->descripcion}}</td>
                                <td align="center">
                                    <form action="{{route('RFuncionales.destroy', $RFuncional)}}"  method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Eliminar</button><br><br>
                                    </form>
                                    
                                </td>
                            </tr> 
                        @endif 
                    @endforeach
                    </table>
                    {{$RFuncionales->links()}}
                    <br><br>
                    <a href="{{route('RFuncional', $project->id)}}"><button class="btn btn-warning">Regresar</button></a>
                </div>
            </div>
        </div>
    </center>
    
</x-app-layout>