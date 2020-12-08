@extends('content_container_card')

@php
$title = "Tabela de Código SKU";
@endphp
@section('card-tools')

@endsection
@section('card-body')

<div class="container" id="">
    <div class="row justify-content-center">
        <div class="col-sm-12 mb-3">
            <form data-sendrequest="{{route('sku.update',$data->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div id="errors" class="alert alert-danger d-none">
                        <ul>
                        </ul>
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="cod">Código SKU: </label>
                        <input type="text" class="form-control" name="cod" id="cod" required="required" value="{{$data->cod}}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <label for="description">Description: </label>
                        <input type="text" class="form-control" name="description" id="description" required="required" value="{{$data->description}}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="enviar">Salvar</button>
            </form>
        </div>
    </div>
</div>

@endsection
