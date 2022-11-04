<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Proyectos') }}
        </h2>
    </x-slot>
    <center>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <h1>AGREGAR PROYECTO </h1>
                    <form action="{{route('addPro')}}" method="POST">
                        @csrf
                        <table>
                            <tr>
                                <td><label for="">Nombre:</label></td><br>
                                <td><input name="nomAct" type="text"></td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-success">AGREGAR</button></td>
                            </tr>
                        </table>
                    </form>
                    <a class="btn btn-dark" href="{{route('listarPro')}}">LISTA DE PROYECTOS</a>
                </div>
            </div>
        </div>
    </center>
</x-app-layout>