@extends('content_container_card')
@php
$title = "Atualizacao de Fornecedor";
$route = route("fornecedores.index");
@endphp
@section('card-body')
<form data-sendrequest="{{url('/fornecedores/'.$data->id)}}" method="POST">
    @method("PUT")
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Informacoes basicas</h3>
                    <div class="card-tools">
                        <button class="btn btn-success" type="submit"> <i class="fa fa-plus"></i> Atualizar</button>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Razão Social</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Razão Social"
                            value="{{$data->name}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Documento</label>
                            <input type="text" name="documento" class="form-control" id="exampleInputEmail1" placeholder="Documento"
                            value="{{$data->documento}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">E-mail</label>
                            <input type="text" name="email" class="form-control" id="exampleInputtext1" placeholder="E-Mail"
                            value="{{$data->email}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">telefone</label>
                            <input type="text" name='phone' class="form-control" id="exampleInputtext1" placeholder="telefone"
                            value="{{$data->phone}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">telefone alternativo</label>
                            <input type="text" name='phone1' class="form-control" id="exampleInputtext1" placeholder="telefone alternativo"
                            value="{{$data->phone1}}">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="exampleInputtext1">Cep</label>
                            <input type="text" name='zipcode' class="form-control" id="exampleInputtext1" placeholder="zipcode"
                            value="{{$data->zipcode}}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Endereço</label>
                            <input type="text" name='street' class="form-control" id="exampleInputtext1" placeholder="Endereço"
                            value="{{$data->street}}">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="exampleInputtext1">Número</label>
                            <input type="text" name='number' class="form-control" id="exampleInputtext1" placeholder="Número"
                            value="{{$data->number}}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Bairro</label>
                            <input type="text" name='district' class="form-control" id="exampleInputtext1" placeholder="Bairro"
                            value="{{$data->district}}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Complemento</label>
                            <input type="text" name='complement' class="form-control" id="exampleInputtext1" placeholder="Complemento"
                            value="{{$data->complement}}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Cidade</label>
                            <input type="text" name='city' class="form-control" id="exampleInputtext1" placeholder="Cidade"
                            value="{{$data->city}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Estado</label>
                            <input type="text" name='uf' class="form-control" id="exampleInputtext1" placeholder="Estado"
                            value="{{$data->uf}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    $(document).getAddress();
</script>
@endsection
