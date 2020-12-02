@extends('content_container_card')
@php
$title = "Cadastro de Produtos";
$route = route("produtos.index");
@endphp
@section('card-body')
<form data-sendrequest="{{route('produtos.store')}}" method="POST">
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
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" name="nome" class="form-control" id="exampleInputEmail1" placeholder="Nome do produto" require="require">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Codigo SKU</label>
                            <input type="text" name="sku" class="form-control" id="exampleInputEmail1" placeholder="Codigo SKU" require="require">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Marca</label>
                            <select name="brand_id" class="form-control">
                                <option>Selecione uma marca</option>
                                @foreach($globalBrands as $brand)
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputtext1">Descricao</label>
                            <textarea name="description" class="form-control" placeholder="descricao do produto" require="require" />
                        </div>

                        <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Empresa</label>
                            <select name="brand_id" class="form-control">
                            <option>Selecione uma Empresa</option>
                                @foreach($globalCompanies as $company)
                                <option value="{{$company->id}}">{{$company->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Fornecedor</label>
                            <select name="brand_id" class="form-control">
                            <option>Selecione um Fornecedor</option>
                                @foreach($globalProviders as $provider)
                                <option value="{{$provider->id}}">{{$provider->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Categoria</label>
                            <select name="brand_id" class="form-control">
                            <option>Selecione uma categoria</option>
                                @foreach($globalCategories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
