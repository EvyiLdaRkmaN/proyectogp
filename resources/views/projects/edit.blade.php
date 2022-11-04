<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proyectos') }}
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
    
                    <h1>Editar Proyecto</h1><br><br>
                    <form action="{{route('projects.update',$project)}}" method="POST" >
    
                        @csrf
                        @method('put')
                        <table>
                            
                            <tr>
                                <td class="label">
                                    <label for="">Nombre:</label>
                                </td>
                                <td>
                                    <input name="nombre" type="text" value="{{old('nombreProyecto', $project->nombreProyecto)}}">
                                </td>
                            </tr>
                        </table>
                        <button class="btn btn-success">Actualizar</button><br>
                        <a href="{{route('projects.show',$project)}}" class="btn btn-danger" >Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </center>
    
</x-app-layout>