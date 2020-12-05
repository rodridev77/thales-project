@extends('content_container_card')
@php
$title = "Cadastro de Clientes"
@endphp
@section('card-body')
<form data-sendrequest="{{route('customer.update',$data->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-8 connectedSortable ui-sortable">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Dados Pessoais</h3>

                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="exampleInputEmail1">Nome Completo</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nome completo" required value="{{$data->name}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Data de Nascimento</label>
                            <input type="date" name="birthday" class="form-control" id="exampleInputEmail1" required value="{{$data->birthdate}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Nome do Conjugue</label>
                            <input type="text" name="conjugate"  value="{{$data->conjugate}}" class="form-control" id="exampleInputtext1" placeholder="Nome do Conjugue" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Telefone do Conjugue</label>
                            <input type="text" name='phone_conjugate' value="{{$data->phone_conjugate}}" class="form-control" id="exampleInputtext1" placeholder="Telefone do Conjugue" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Estado Civíl</label>
                            <input type="text" name="state_civil" value="{{$data->state_civil}}" class="form-control" id="exampleInputtext1" placeholder="Estado Civíl" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Nome da Empresa</label>
                            <input type="text" name="company" value="{{$data->company}}" class="form-control" id="exampleInputtext1" placeholder="Estado Civíl" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Renda Mensal</label>
                            <input type="text" data-money name='income' value="{{$data->income}}" class="form-control" id="exampleInputtext1" placeholder="Renda Mensal" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Numero de Dependentes</label>
                            <input type="text" name="dependents" value="{{$data->dependents}}" class="form-control" id="exampleInputtext1" placeholder="Numero de Dependentes" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">CPF</label>
                            <input type="text" name="cpf" value="{{$data->cpf}}" class="form-control" id="exampleInputtext1" placeholder="CPF" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">RG</label>
                            <input type="text" name='rg' value="{{$data->rg}}" class="form-control" id="exampleInputtext1" placeholder="RG" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Telefone</label>
                            <input type="text" name="phone" value="{{$data->phone}}" class="form-control" id="exampleInputtext1" placeholder="Telefone" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Telefone Residencial</label>
                            <input type="text" name="phone_residential" value="{{$data->phone_residential}}" class="form-control" id="exampleInputtext1" placeholder="Telefone Residencial" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Telefone Comercial</label>
                            <input type="text" name='phone_commercial' value="{{$data->phone_commercial}}" class="form-control" id="exampleInputtext1" placeholder="Telefone Comercial" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Telefone Complementar</label>
                            <input type="text" name="phone_complementary" value="{{$data->phone_complementary}}" class="form-control" id="exampleInputtext1" placeholder="Telefone Complementar" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputtext1">Nome da Mãe</label>
                            <input type="text" name="mother_name" value="{{$data->mother_name}}" class="form-control" id="exampleInputtext1" placeholder="Nome da mãe" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputtext1">Nome do Pai</label>
                            <input type="text" name="father_name" value="{{$data->father_name}}" class="form-control" id="exampleInputtext1" placeholder="Nome do pai" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Gênero</label>
                            <select class="form-control" id="exampleInputtext1" name="gender" required>
                                <option @if($data->gender == "masculino" ) selected @endif value="masculino">Masculino</option>
                                <option @if($data->gender == "Feminino" ) selected @endif value="Feminino">Feminino</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Escolaridade</label>
                            <select class="form-control" id="exampleInputtext1" name="level_of_schooling" required>
                                <option selected disabled>Selecione sua Escolaridade</option>
                                <option value="Ensino Fundamental">Ensino Fundamental</option>
                                <option value="Ensino Fundamental incompleto">Ensino Fundamental incompleto</option>
                                <option value="Ensino Medio">Ensino Medio</option>
                                <option value="Ensino Medio incompleto">Ensino Medio incompleto</option>
                                <option value="Ensino Medio técnico">Ensino Medio técnico</option>
                                <option value="Ensino Superior">Ensino Superior</option>
                                <option value="Não Alfabetizado">Não Alfabetizado</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Email</label>
                            <input type="email" name="email" value="{{$data->email}}" class="form-control" id="exampleInputtext1" placeholder="Email" required>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 connectedSortable ui-sortable">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Endereço</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputFile">CEP</label>
                            <input type="text" value="{{$data->cep}}" class="form-control" name="zipcode" id="exampleInputFile" placeholder="CEP" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Estado</label>
                            {{-- <select class="form-control" name="uf" id="estados" onchange="setCities(event)">
                                    <option selected disabled>Selecione seu estado</option>
                                </select> --}}
                            <input type="text" name="uf" value="{{$data->uf}}" placeholder="Estado" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Cidade</label>
                            {{-- <select class="form-control" name="city" id="cidades" data-code="" onclick="setDistricts(event)">
                                    <option selected disabled>Selecione sua cidade</option>
                                </select> --}}
                            <input type="text" name="city" value="{{$data->city}}" placeholder="Cidade" class="form-control" required>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="exampleInputFile">Rua</label>
                            <input type="text" class="form-control" name="street" value="{{$data->street}}" id="exampleInputFile" placeholder="Nome da rua" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Bairro</label>
                            {{-- <select class="form-control" id="bairros" name="district">
                                    <option selected disabled>Selecione seu Bairro</option>
                                </select> --}}
                            <input type="text" name="district" value="{{$data->district}}" placeholder="Bairro" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputFile">Numero</label>
                            <input type="number" class="form-control" name="number" value="{{$data->number}}" id="exampleInputFile" placeholder="Número da Residência" required>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="exampleInputFile">Informações Complementares</label>
                            <input type="text" class="form-control" name="additional_information" value="{{$data->additional_information}}" id="exampleInputFile" placeholder="Dados Complementares" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-tools ml-1">
            <input type="submit" value="cadastrar" class="btn btn-success btn-lg">
        </div>

    </div>
    </div>
</form>
<script>
    $(document).ready(function() {
        $(document).getAddress();
    })
</script>
@endsection
