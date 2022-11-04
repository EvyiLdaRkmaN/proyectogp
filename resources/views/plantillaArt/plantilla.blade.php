<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <img src="https://cdn-icons-png.flaticon.com/512/6823/6823086.png" width="25" height="25">
            {{ __('Artefactos') }}
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
                    <h1>GENERAR PLANTILLA</h1>
                    <form action="" method="POST">
                        @csrf
                            <table>
                                <tr>
                                    <td class="label">
                                        <label for="">Atributos:</label>
                                    </td>
                                    <td>
                                        <label for="">Descripción:</label>
                                    </td>
                                    <td>
                                        <label for="">Tipo:</label>
                                    </td>
                                    <td>
                                        <label for="">Rango:</label>
                                    </td>
                                    <td>
                                        <label for="">Excepciones:</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input name="atributos" type="text" size="30" placeholder="Ejem. Nombre, Tipo">
                                    </td>
                                    <td>
                                        <textarea name="descripcion" id="" cols="30" rows="3"></textarea>
                                    </td>
                                    <td>
                                        <input name="tipo" type="text" size="30" placeholder="Ejem. Cadena">
                                    </td>
                                    <td>
                                        <select name="rango" id="">
                                            <option value="[a-z-A-Z]+">[a-z-A-Z]+</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="excepciones" id="">
                                            <option value="No se permiten caracteres especiales">No se permiten caracteres especiales</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input name="idProyecto" value="{{$project->id}}">
                                    </td>
                                    <td>
                                        <input name="idArtefacto" type="hidden" value="{{$project->id}}">
                                    </td>
                                </tr>
                            </table>
                            <button class="btn btn-success">AGREGAR</button><br>
                        </form>
                    <a class="btn btn-danger" href="{{route('projects.show', $project->id)}}">REGRESAR</a>
                </div>
            </div>
        </div>
    </center>
</x-app-layout>