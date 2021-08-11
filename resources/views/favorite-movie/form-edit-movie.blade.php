<div class="container">
    <div class="row">

        <div class="col-lg-4">
            <h3 class="text-center"><strong>Cadastro</strong></h3>
            <form action="{{url('filmes/editar/salvar')}}" method="POST">
                @csrf

                <input type="text" name="id" value="{{$movie->id}}" hidden>

                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$movie->title}}">
                    @error('title')
                        <div class="alert alert-light" >{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="release_year">Ano de Lançamento</label>
                    <input type="number" class="form-control" id="release_year" name="release_year" value="{{$movie->release_year}}">
                    @error('release_year')
                    <div class="alert alert-light" >{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="director">Diretor</label>
                    <input type="text" class="form-control" id="director" name="director" value="{{$movie->director}}">
                    @error('director')
                    <div class="alert alert-light" >{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group"><br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
            <br><br>
        </div>


        <div class="col-lg-8">

            <h3 class="text-center"><strong>Todos os endereços</strong></h3>
            @include('favorite-movie.table-movies')

        </div>
    </div>
</div>
