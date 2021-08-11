<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="row" style="margin: 2rem 0;">
                        <h1 class="text-center"><strong>Bem vindo, {{Auth::user()->name}}</strong></h1>
                        <div class="col-lg-6" style="border-left: solid">
                            <br>
                            <h4 class="text-center"><strong>Último filme adicionado</strong></h4>
                            @if ($last_movie != '')
                                <p><strong>Título: </strong>{{$last_movie->title}}</p>
                                <p><strong>Ano: </strong>{{$last_movie->release_year}}</p>
                                <p><strong>Diretor: </strong>{{$last_movie->director}}</p>
                            @else
                                <p>Você ainda não tem filmes adicionados.</p>
                            @endif
                        </div>
                        <div class="col-lg-6" style="border-left: solid">
                            <br>
                            <h4 class="text-center"><strong>Último endereço</strong></h4>
                            @if ($last_address != '')
                                <p><strong>Cidade: </strong>{{$last_address->city}}</p>
                                <p><strong>Bairro: </strong>{{$last_address->district}}</p>
                                <p><strong>Rua: </strong>{{$last_address->street}}</p>
                                <p><strong>Número: </strong>{{$last_address->number}}</p>
                            @else
                                <p>Você ainda não tem endereços adicionados.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
