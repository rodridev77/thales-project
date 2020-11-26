@extends('content_container_card')
@php
$title = "Atualizacao de Fornecedor";
$route = route("fornecedores.index");
@endphp
@section('card-body')
<form data-sendrequest="{{url('/fornecedores/')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Informacoes basicas</h3>
                    <div class="card-tools">
                        <button class="btn btn-success" type="submit"> <i class="fa fa-plus"></i> Cadastrar</button>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Razão Social</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Razão Social">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Documento</label>
                            <input type="text" name="documento" class="form-control" id="exampleInputEmail1" placeholder="Documento">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">E-mail</label>
                            <input type="text" name="email" class="form-control" id="exampleInputtext1" placeholder="E-Mail">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">telefone</label>
                            <input type="text" name='phone' class="form-control" id="exampleInputtext1" placeholder="telefone">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">telefone alternativo</label>
                            <input type="text" name='phone1' class="form-control" id="exampleInputtext1" placeholder="telefone alternativo">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="exampleInputtext1">Cep</label>
                            <input type="text" name='zipcode' class="form-control" id="exampleInputtext1" placeholder="cep">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Endereço</label>
                            <input type="text" name='street' class="form-control" id="exampleInputtext1" placeholder="Endereço">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="exampleInputtext1">Número</label>
                            <input type="text" name='number' class="form-control" id="exampleInputtext1" placeholder="Número">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Bairro</label>
                            <input type="text" name='district' class="form-control" id="exampleInputtext1" placeholder="Bairro">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Complemento</label>
                            <input type="text" name='complement' class="form-control" id="exampleInputtext1" placeholder="Complemento">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Cidade</label>
                            <input type="text" name='city' class="form-control" id="exampleInputtext1" placeholder="Cidade">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Estado</label>
                            <input type="text" name='uf' class="form-control" id="exampleInputtext1" placeholder="Estado">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    $('body').getAddress();
</script>
@endsection
