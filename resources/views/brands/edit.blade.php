@extends('content_container_card')
@php
$title = "Atualizacao de Loja";
$route = route("marcas.index");
@endphp
@section('card-body')
<form data-sendrequest="{{url('/marcas/'.$data->id)}}" method="POST">
    @method("PUT")
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Informacoes</h3>
                    <div class="card-tools">
                        <button class="btn btn-success" type="submit"> <i class="fa fa-plus"></i> Cadastrar</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Nome da marca</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nome da marca" value="{{$data->name}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
