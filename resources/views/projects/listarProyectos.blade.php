<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proyectos') }}
        </h2>
    </x-slot>
    <center>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <h1>LISTA DE PROYECTOS</h1><br>
                    <table class="table table-info">
                        <td class="bg-primary" align="center"><b>NOMBRE</b></td>
                        <td class="bg-primary" align="center"><b>ACCIONES</b></td>
                        @foreach ($projects as $project)
                            <tr>
                                <td align="center">{{$project->nombreProyecto}}</td>
                                <td align="center">
                                    <a href="{{route('projects.show', $project->id)}}" class="btn btn-outline-primary" title="Entrar">
                                        <img src="https://cdn-icons-png.flaticon.com/512/5082/5082610.png" width="20" height="20">
                                    </a>
                                </td>
                            </tr>  
                        @endforeach
                    </table>
                    {{$projects->links()}}
                    <br>
                    <a href="{{route('projects')}}"><button class="btn btn-warning">Regresar</button></a>
                </div>
            </div>
        </div>
    </center>
</x-app-layout>