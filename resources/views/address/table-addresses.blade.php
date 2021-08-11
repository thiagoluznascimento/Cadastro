<div class="table-responsive" style="max-height: 400px;">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Cidade</th>
            <th scope="col">Bairro</th>
            <th scope="col">Rua</th>
            <th scope="col">Número</th>
            <th scope="col" style="width: 190px;">Opções</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($addresses as $address)
            <tr>
                <td>{{$address->city}}</td>
                <td>{{$address->district}}</td>
                <td>{{$address->street}}</td>
                <td>{{$address->number}}</td>
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalInfo{{$address->id}}" title="Detalhes">
                        <ion-icon name="information-circle-outline"></ion-icon>
                    </button>
                    <div class="modal fade" id="modalInfo{{$address->id}}" tabindex="-1" aria-labelledby="modalInfoTitle" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalInfoTitle"> <strong>Detalhes</strong></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Dados</strong></p>
                                    <p>Rua: {{$address->street}}</p>
                                    <p>Nº: {{$address->number}}</p>
                                    <p>Bairro: {{$address->district}}</p>
                                    <p>Cidade: {{$address->city}}</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" title="Editar">
                        <a style="color: #fff; text-decoration: none;" href="{{url('enderecos/' . $address->id)}}">
                            <ion-icon name="create-outline" title="Editar"></ion-icon>
                        </a>
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDelete{{$address->id}}" title="Excluir">
                        <ion-icon name="trash-outline"></ion-icon>
                    </button>
                    <div class="modal fade" id="modalDelete{{$address->id}}" tabindex="-1" aria-labelledby="modalDeleteTitle" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalDeleteTitle">Excluir Endereço</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Dados</strong></p>
                                    <p>Rua: {{$address->street}}, Nº {{$address->number}}</p>
                                    <p>Bairro: {{$address->district}} - {{$address->city}}</p>
                                    <br>
                                    <p class="text-center">Deseja excluir este endereço ?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                                    <button type="button" class="btn btn-primary"><a style="color: #fff; text-decoration: none;" href="{{url('enderecos/excluir/' . $address->id)}}">Sim</a></button>
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
