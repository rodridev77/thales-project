@extends('content_container_card')
@php
$title = "Detalhes do Fornecedor";
$route = route("fornecedores.index");
@endphp
@section('card-body')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Informacoes basicas</h3>
                    <div class="card-tools">

                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <b>Nome Fantasia : </b><span>{{$data->fantasyname}}</span>
                        </div>
                        <div class="form-group col-md-6">
                        <b>Razao Social : </b><span>{{$data->razaosocial}}</span>
                        </div>
                        <div class="form-group col-md-6">
                        <b>CNPJ : </b><span>{{$data->cnpj}}</span>
                        </div>
                        <div class="form-group col-md-6">
                        <b>IE </b><span>{{$data->ie}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
