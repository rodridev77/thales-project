@extends('content_container_card')
@php
$title = "Detalhes do Fornecedor";
$route = route("fornecedores.index");
@endphp
@section('card-body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Informacoes basicas</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Razão Social</label>
                            <input disabled type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Razão Social"
                            value="{{$data->name}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Documento</label>
                            <input disabled type="text" name="documento" class="form-control" id="exampleInputEmail1" placeholder="Documento"
                            value="{{$data->documento}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">E-mail</label>
                            <input disabled type="text" name="email" class="form-control" id="exampleInputtext1" placeholder="E-Mail"
                            value="{{$data->email}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">telefone</label>
                            <input disabled type="text" name='phone' class="form-control" id="exampleInputtext1" placeholder="telefone"
                            value="{{$data->phone}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">telefone alternativo</label>
                            <input disabled type="text" name='phone1' class="form-control" id="exampleInputtext1" placeholder="telefone alternativo"
                            value="{{$data->phone1}}">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="exampleInputtext1">Cep</label>
                            <input disabled type="text" name='zipcode' class="form-control" id="exampleInputtext1" placeholder="zipcode"
                            value="{{$data->zipcode}}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Endereço</label>
                            <input disabled type="text" name='street' class="form-control" id="exampleInputtext1" placeholder="Endereço"
                            value="{{$data->street}}">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="exampleInputtext1">Número</label>
                            <input disabled type="text" name='number' class="form-control" id="exampleInputtext1" placeholder="Número"
                            value="{{$data->number}}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Bairro</label>
                            <input disabled type="text" name='district' class="form-control" id="exampleInputtext1" placeholder="Bairro"
                            value="{{$data->district}}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Complemento</label>
                            <input disabled type="text" name='complement' class="form-control" id="exampleInputtext1" placeholder="Complemento"
                            value="{{$data->complement}}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Cidade</label>
                            <input disabled type="text" name='city' class="form-control" id="exampleInputtext1" placeholder="Cidade"
                            value="{{$data->city}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Estado</label>
                            <input disabled type="text" name='uf' class="form-control" id="exampleInputtext1" placeholder="Estado"
                            value="{{$data->uf}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
