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
                    
                    <h1 class="titulo">Plantilla del Actor</h1>
                    <a href="{{route('listarAct', $project->id)}}" class="btn btn-warning" >Regresar</a>
                    <br><br>
                    
                    <table class="table table-info">
                        <tr>
                            <td class="bg-info" align="right"><b>Clave</b></td>
                            <td class="bg-info"><b>{{$actor->clave}}</b></td>
                        </tr>
                        <tr>
                            <td align="right"><b>Nombre</b></td>
                            <td>{{$actor->nombre}}</td>
                        </tr>
                        <tr>
                            <td align="right"><b>Descripción</b></td>
                            <td>{{$actor->descripcion}}</td>
                        </tr>
                        <tr>
                            <td align="right"><b>Caracteristicas</b></td>
                            <td>{{$actor->caracteristicas}}</td>
                        </tr>
                        <tr>
                            <td align="right"><b>Responsabilidad</b></td>
                            <td>{{$actor->responsabilidad}}</td>
                        </tr>
                        <tr>
                            <td align="right"><b>Referencias</b></td>
                            <td>{{$actor->referencias}}</td>
                        </tr>
                        <tr>
                            <td align="center" colspan="2">
                                <a href="{{route('actores.edit', array($project->id, $actor->id))}}" class="btn btn-primary">Actualizar</a><br>
                                <form action="{{route('actores.destroy', $actor)}}"  method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Eliminar</button><br><br>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </center>
</x-app-layout>