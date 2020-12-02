@extends('content_container_card')
@php
    $title = "Cadastro de Clientes"
@endphp
@section('card-body')
    <form action="{{url('/customer/add')}}" method="post">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Dados Pessoais</h3>

                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="exampleInputEmail1">Nome Completo</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nome completo">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Data de Nascimento</label>
                                <input type="date" name="birthday" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputtext1">Nome do Conjugue</label>
                                <input type="text" name="conjugate" class="form-control" id="exampleInputtext1"
                                       placeholder="Nome do Conjugue">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputtext1">Telefone do Conjugue</label>
                                <input type="text" name='phone_conjugate' class="form-control" id="exampleInputtext1"
                                       placeholder="Telefone do Conjugue">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputtext1">Estado Civíl</label>
                                <input type="text" name="state_civil" class="form-control" id="exampleInputtext1"
                                       placeholder="Estado Civíl">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputtext1">Nome da Empresa</label>
                                <input type="text" name="company" class="form-control" id="exampleInputtext1"
                                       placeholder="Estado Civíl">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputtext1">Renda Mensal</label>
                                <input type="text" name='income' class="form-control" id="exampleInputtext1"
                                       placeholder="Renda Mensal">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputtext1">Numero de Dependentes</label>
                                <input type="text" name="conjugate" class="form-control" id="exampleInputtext1"
                                       placeholder="Numero de Dependentes">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputtext1">CPF</label>
                                <input type="text" name="dependents" class="form-control" id="exampleInputtext1"
                                       placeholder="CPF">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputtext1">RG</label>
                                <input type="text" name='rg' class="form-control" id="exampleInputtext1"
                                       placeholder="RG">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputtext1">Telefone</label>
                                <input type="text" name="phone" class="form-control" id="exampleInputtext1"
                                       placeholder="Telefone">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputtext1">Telefone Residencial</label>
                                <input type="text" name="phone_residential" class="form-control" id="exampleInputtext1"
                                       placeholder="Telefone Residencial">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputtext1">Telefone Comercial</label>
                                <input type="text" name='phone_commercial' class="form-control" id="exampleInputtext1"
                                       placeholder="Telefone Comercial">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputtext1">Telefone Complementar</label>
                                <input type="text" name="phone_complementary" class="form-control" id="exampleInputtext1"
                                       placeholder="Telefone Complementar">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputtext1">Nome da Mãe</label>
                                <input type="text" name="mother_name" class="form-control" id="exampleInputtext1"
                                       placeholder="Nome da mãe">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputtext1">Nome do Pai</label>
                                <input type="text" name="father_name" class="form-control" id="exampleInputtext1"
                                       placeholder="Nome do pai">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputtext1">Gênero</label>
                                <select class="form-control" id="exampleInputtext1" name="gender">
                                    <option value="masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputtext1">Escolaridade</label>
                                <select class="form-control" id="exampleInputtext1" name="level_of_schooling">
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
                                <input type="email" name="email" class="form-control" id="exampleInputtext1"
                                       placeholder="Email">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Endereço</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Estado</label>
                                {{-- <select class="form-control" name="uf" id="estados" onchange="setCities(event)">
                                    <option selected disabled>Selecione seu estado</option>
                                </select> --}}
                                <input type="text" name="uf" placeholder="Estado" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1" >Cidade</label>
                                {{-- <select class="form-control" name="city" id="cidades" data-code="" onclick="setDistricts(event)">
                                    <option selected disabled>Selecione sua cidade</option>
                                </select> --}}
                                <input type="text" name="city" placeholder="Cidade" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1" >Bairro</label>
                                {{-- <select class="form-control" id="bairros" name="district">
                                    <option selected disabled>Selecione seu Bairro</option>
                                </select> --}}
                                <input type="text" name="district" placeholder="Bairro" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputFile">Rua</label>
                                <input type="text" class="form-control" name="street" id="exampleInputFile" placeholder="Nome da rua">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputFile">CEP</label>
                                <input type="text" class="form-control" name="zipcode" id="exampleInputFile" placeholder="CEP">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputFile">Numero</label>
                                <input type="text" class="form-control" name="number" id="exampleInputFile" placeholder="Número da Residência">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputFile">Informações Complementares</label>
                                <input type="text" class="form-control" name="number" id="exampleInputFile" placeholder="Dados Complementares">
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
@endsection
