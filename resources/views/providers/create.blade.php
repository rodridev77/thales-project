@extends('content_container_card')
@php
$title = "Atualizacao de Fornecedor";
$route = route("fornecedores.index");
@endphp
@section('card-body')
<form data-sendrequest="{{route('fornecedores.store')}}" method="POST">
    @csrf
    <div class="row">
        <div id="errors" class="alert alert-danger d-none">
            <ul>
            </ul>
        </div>
        <div class="col-md-12">
            <div class="card">
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
                            <label for="exampleInputtext1">CEP</label>
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
                <div class="card-footer">
                    <button class="btn btn-success btn-lg" type="submit"> <i class="fa fa-check"></i> Cadastrar</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    $(document).ready(function() {
        $('body').getAddress();
    });
</script>
@endsection
