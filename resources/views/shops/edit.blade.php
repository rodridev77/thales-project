@extends('content_container_card')
@php
$title = "Atualizacao de Loja";
$route = route("lojas.index");
@endphp
@section('card-body')
<form data-sendrequest="{{url('/lojas/'.$data->id)}}" method="POST">
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
                <div id="errors" class="alert alert-danger d-none">
                        <ul>
                        </ul>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Nome Fantasia</label>
                            <input type="text" name="fantasyname" class="form-control" id="exampleInputEmail1" placeholder="Nome Fantasia"
                            value="{{$data->fantasyname}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Razao Social</label>
                            <input type="text" name="companyname" class="form-control" id="exampleInputEmail1" placeholder="Razao Social"
                            value="{{$data->companyname}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputtext1">CNPJ</label>
                            <input type="text" name="cnpj" class="form-control" id="exampleInputtext1" placeholder="CNPJ"
                            value="{{$data->cnpj}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputtext1">IE</label>
                            <input type="text" name='ie' class="form-control" id="exampleInputtext1" placeholder="IE"
                            value="{{$data->ie}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
