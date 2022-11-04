<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actores') }}
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
                    <h1>Editar Actor</h1><br><br>
                    <form action="{{route('actores.update',array($project->id, $actor->id))}}" method="POST" >
                        @csrf
                        @method('put')
                        <table>
                            <tr>
                                <td class="label">
                                    <label for="">Clave:</label>
                                </td>
                                <td>
                                    <input name="clave" type="text" placeholder="Ejem: ACT.01" value="{{old('clave', $actor->clave)}}">
                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    <label for="">Nombre:</label>
                                </td>
                                <td>
                                    <input name="nombre" type="text" value="{{old('nombre', $actor->nombre)}}">
                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    <label for="">Descripción:</label>
                                </td>
                                <td>
                                    <textarea name="descripcion" id="" cols="30" rows="3" >{{old('descripcion', $actor->descripcion)}}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    <label for="">Caracteristicas:</label>
                                </td>
                                <td class="label">
                                    <textarea name="caracteristicas" id="" cols="30" rows="2">{{old('caracteristicas', $actor->caracteristicas)}}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    <label for="">Responsabilidad:</label>
                                </td>
                                <td>
                                    <textarea name="responsabilidad" id="" cols="30" rows="2">{{old('caracteristicas', $actor->responsabilidad)}}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    <label for="">Referencias:</label>
                                </td>
                                <td>
                                    <select name="referencias" id="referencias" multiple>
                                        @foreach ($actores as $act)
                                            @if ($act->idProyecto == $project->id)
                                                <option value="{{$act->nombre}}">{{$act->nombre}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <button class="btn btn-success">Actualizar</button><br>
                        <a href="{{route('actores.show',array($project->id, $actor->id))}}" class="btn btn-danger" >Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </center>
</x-app-layout>