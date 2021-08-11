<div class="table-responsive" style="max-height: 400px;">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Título</th>
            <th scope="col">Ano</th>
            <th scope="col">Diretor</th>
            <th scope="col" style="width: 190px;">Opções</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <td>{{$movie->title}}</td>
                <td>{{$movie->release_year}}</td>
                <td>{{$movie->director}}</td>
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalInfo{{$movie->id}}" title="Detalhes">
                        <ion-icon name="information-circle-outline"></ion-icon>
                    </button>
                    <div class="modal fade" id="modalInfo{{$movie->id}}" tabindex="-1" aria-labelledby="modalInfoTitle" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalInfoTitle"> <strong>Detalhes</strong></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Dados</strong></p>
                                    <p>Título: {{$movie->title}}</p>
                                    <p>Ano de lançamento: {{$movie->release_year}}</p>
                                    <p>Diretor: {{$movie->director}}</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" title="Editar">
                        <a style="color: #fff; text-decoration: none;" href="{{url('filmes/' . $movie->id)}}">
                            <ion-icon name="create-outline" title="Editar"></ion-icon>
                        </a>
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDelete{{$movie->id}}" title="Excluir">
                        <ion-icon name="trash-outline"></ion-icon>
                    </button>
                    <div class="modal fade" id="modalDelete{{$movie->id}}" tabindex="-1" aria-labelledby="modalDeleteTitle" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalDeleteTitle">Excluir Filme</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Dados</strong></p>
                                    <p>Título: {{$movie->title}}</p>
                                    <p>Ano de lançamento: {{$movie->release_year}}</p>
                                    <p>Diretor: {{$movie->director}}</p>
                                    <br>
                                    <p class="text-center">Deseja excluir este filme ?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                                    <button type="button" class="btn btn-primary"><a style="color: #fff; text-decoration: none;" href="{{url('filmes/excluir/' . $movie->id)}}">Sim</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
