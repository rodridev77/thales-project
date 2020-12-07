@extends('content_container_card')
@php
$title = "Atualizacao de Produtos";
$route = route("produtos.index");
@endphp
@section('card-body')
<form data-sendrequest="{{route('produtos.update',$data->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div id="errors" class="alert alert-danger d-none">
            <ul>
            </ul>
        </div>
        <div class="col-md-12">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nome do produto" value="{{ $data->name }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Codigo SKU</label>
                    <input type="text" name="sku" class="form-control" id="exampleInputEmail1" placeholder="Codigo SKU" value="{{ $data->sku }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Marca</label>
                    <select name="brand_id" class="form-control">
                        <option disabled>Selecione uma marca</option>
                        @foreach($globalBrands as $brand)
                        <option @if($data->brand_id == $brand->id) selected @endif value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">valor de custo</label>
                    <input type="text" name="cost_price" class="form-control" id="exampleInputEmail1" placeholder="valor de custo" value="{{ number_format($data->cost_price,2,',','.') }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">valor de Venda</label>
                    <input type="text" name="sale_price" class="form-control" id="exampleInputEmail1" placeholder="valor de venda" value="{{ number_format($data->sale_price,2,',','.') }}">
                </div>

                <div class="form-group col-md-12">
                    <label for="exampleInputtext1">Descricao</label>
                    <textarea name="description" class="form-control" placeholder="descricao do produto">{{ $data->description }}</textarea>
                </div>

                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Loja</label>
                    <select name="shop_id" class="form-control" require="require">
                        <option disabled>Selecione uma Loja</option>
                        @foreach($globalShops as $shop)
                        <option @if($data->shop_id == $shop->id) selected @endif value="{{$shop->id}}">{{$shop->fantasyname}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Fornecedor</label>
                    <select name="provider_id" class="form-control">
                        <option disabled>Selecione um Fornecedor</option>
                        @foreach($globalProviders as $provider)
                        <option @if($data->provider_id == $provider->id) selected @endif value="{{$provider->id}}">{{$provider->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Categoria</label>
                    <select name="category_id" class="form-control">
                        <option disabled>Selecione uma categoria</option>
                        @foreach($globalCategories as $category)
                        <option @if($data->category_id == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <button class="btn btn-success" type="submit"> <i class="fa fa-edit"></i> Atualizar</button>
    </div>
</form>
@endsection
