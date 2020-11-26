@extends('content_container_card')
@php
$title = "Cadastro de Loja";
$route = route("lojas.index");
@endphp
@section('card-body')
<form data-sendrequest="{{url('/lojas')}}" method="POST">
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
                            <label for="exampleInputEmail1">Nome Fantasia</label>
                            <input type="text" name="fantasyname" class="form-control" id="exampleInputEmail1" placeholder="Nome Fantasia">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Razao Social</label>
                            <input type="text" name="companyname" class="form-control" id="exampleInputEmail1" placeholder="Razao Social">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputtext1">CPF</label>
                            <input type="text" name="cnpj" class="form-control" id="exampleInputtext1" placeholder="CNPJ">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputtext1">RG</label>
                            <input type="text" name='ie' class="form-control" id="exampleInputtext1" placeholder="IE">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
