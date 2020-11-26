@extends('content_container_card')
@php
$title = "Detalhes da Marca";
$route = route("marcas.index");
@endphp
@section('card-body')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <b>Nome da Marca: </b><span>{{$data->name}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
