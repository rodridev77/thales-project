@extends('content_container_card')

<div class="container-fluid" style="margin-top: 10px; margin-bottom:10px;">
    <div class="row">
        <div class="col-sm-12">
            <a href="#" onclick="loadViewInHome('{{route('sku.home')}}')">
                <i class='fas fa-arrow-left' style='font-size:16px;color: rgba(0, 123, 255, .7);'></i><span
                    style="margin-left:5px">voltar</span>
            </a>
        </div>
    </div>
</div>

@php
$title = "Tabela de Código SKU";
@endphp
@section('card-tools')

@endsection
@section('card-body')

<div class="container" id="">
    <div class="row justify-content-center">
        <div class="col-sm-12 mb-3">
            <form data-savesku="{{url('/sku/update/'.$sku->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <label for="cod">Código SKU: </label>
                        <input type="text" class="form-control" name="cod" id="cod" required="required" value="{{$sku->cod}}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <label for="description">Description: </label>
                        <input type="text" class="form-control" name="description" id="description" required="required"
                            value="{{$sku->description}}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="enviar">Salvar</button>
            </form>
        </div>
    </div>
</div>

@endsection