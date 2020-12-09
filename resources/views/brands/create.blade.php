@extends('content_container_card')
@php
$title = "Cadastro de Marca";
$route = route("marcas.index");
@endphp
@section('card-body')
<form data-sendrequest="{{route('marcas.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div id="errors" class="alert alert-danger d-none">
                        <ul>
                        </ul>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Nome da Marca</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nome da marca">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-success" type="submit"> <i class="fa fa-check"></i> Cadastrar</button>
    </div>
</form>
@endsection
