<div class="container">
    <div class="row">

        <div class="col-lg-4">
            <h3 class="text-center"><strong>Cadastro</strong></h3>
            <form action="{{url('enderecos/salvar')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="city">Cidade</label>
                    <input type="text"class="form-control" id="city" name="city" value="{{old('city')}}">
                    @error('city')
                    <div class="alert alert-light" >{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="district">Bairro</label>
                    <input type="text"class="form-control" id="district" name="district" value="{{old('district')}}">
                    @error('district')
                    <div class="alert alert-light" >{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="street">Rua</label>
                    <input type="text"class="form-control" id="street" name="street" value="{{old('street')}}">
                    @error('street')
                    <div class="alert alert-light" >{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="number">Número</label>
                    <input type="number"class="form-control" id="number" name="number" value="{{old('number')}}">
                    @error('number')
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
            @include('address.table-addresses')

        </div>

    </div>
</div>
