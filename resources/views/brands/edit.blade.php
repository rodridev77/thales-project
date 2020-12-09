@extends('content_container_card')
@php
$title = "Atualizacao de Loja";
$route = route("marcas.index");
@endphp
@section('card-body')
<form data-sendrequest="{{route('marcas.update',$data->id)}}" method="POST">
    @method("PUT")
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-row">
                <div id="errors" class="alert alert-danger d-none">
                    <ul>
                    </ul>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Nome da marca</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nome da marca" value="{{$data->name}}">
                </div>
            </div>
        </div>
        <button class="btn btn-success" type="submit"> <i class="fa fa-check"></i> Salvar</button>
    </div>
</form>
@endsection
