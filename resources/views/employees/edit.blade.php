@extends('content_container_card')
@php
<<<<<<< HEAD
$title = "Atualização de Funcionario"
@endphp
@section('card-body')
<form data-saveemployee="{{url('/funcionarios/edit/'.$employee->id)}}" method="POST">
=======
$title = "Atualização de Funcionário"
@endphp
@section('card-body')
<form data-saveemployee="{{url('funcionarios/edit/'.$employee->id))}}" method="POST">
>>>>>>> 03263021ec346db5812276281ddd57ce3156a49c
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados Pessoais</h3>
                    <div class="card-tools">
<<<<<<< HEAD
                        <button class="btn btn-success" type="submit"> <i class="fa fa-edit"></i> Editar</button>
=======
                        <button class="btn btn-success" type="submit"> <i class="fa fa-plus"></i> Cadastrar</button>
>>>>>>> 03263021ec346db5812276281ddd57ce3156a49c
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="exampleInputEmail1">Nome Completo</label>
<<<<<<< HEAD
                                <input type="text" name="name" value="{{$employee->name}}" class="form-control" id="exampleInputEmail1" placeholder="Nome completo">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Data de Nascimento</label>
                                <input type="date" name="birthday" value="{{$employee->birthday}}" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputtext1">CPF</label>
                                <input type="text" name="cpf" value="{{$employee->cpf}}" class="form-control" id="exampleInputtext1"
=======
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nome completo">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Data de Nascimento</label>
                                <input type="date" name="birthday" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputtext1">CPF</label>
                                <input type="text" name="cpf" class="form-control" id="exampleInputtext1"
>>>>>>> 03263021ec346db5812276281ddd57ce3156a49c
                                    placeholder="CPF">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputtext1">RG</label>
<<<<<<< HEAD
                                <input type="text" name='rg' value="{{$employee->rg}}" class="form-control" id="exampleInputtext1"
=======
                                <input type="text" name='rg' class="form-control" id="exampleInputtext1"
>>>>>>> 03263021ec346db5812276281ddd57ce3156a49c
                                    placeholder="RG">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputtext1">Telefone</label>
<<<<<<< HEAD
                                <input type="text" name="phone" value="{{$employee->phone}}" class="form-control" id="exampleInputtext1"
=======
                                <input type="text" name="phone" class="form-control" id="exampleInputtext1"
>>>>>>> 03263021ec346db5812276281ddd57ce3156a49c
                                    placeholder="text">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputtext1">Nome da Mãe</label>
<<<<<<< HEAD
                                <input type="text" name="mother_name" value="{{$employee->mother_name}}" class="form-control" id="exampleInputtext1"
=======
                                <input type="text" name="mother_name" class="form-control" id="exampleInputtext1"
>>>>>>> 03263021ec346db5812276281ddd57ce3156a49c
                                    placeholder="Nome da mãe">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputtext1">Nome do Pai</label>
<<<<<<< HEAD
                                <input type="text" name="father_name" value="{{$employee->father_name}}" class="form-control" id="exampleInputtext1"
=======
                                <input type="text" name="father_name" class="form-control" id="exampleInputtext1"
>>>>>>> 03263021ec346db5812276281ddd57ce3156a49c
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
<<<<<<< HEAD
                                <input type="email" name="email" value="{{$employee->email}}" class="form-control" id="exampleInputtext1"
=======
                                <input type="email" name="email" class="form-control" id="exampleInputtext1"
>>>>>>> 03263021ec346db5812276281ddd57ce3156a49c
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
<<<<<<< HEAD
                                <input type="text" name="uf" value="{{$employee->address->uf}}" placeholder="Estado" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1" >Cidade</label>
                                {{-- <select class="form-control" name="city" value="{{$employee->address->city}}" id="cidades" data-code="" onclick="setDistricts(event)">
                                    <option selected disabled>Selecione sua cidade</option>
                                </select> --}}
                                <input type="text" name="city" value="{{$employee->address->city}}" placeholder="Cidade" class="form-control">
=======
                                <input type="text" name="uf" placeholder="Estado" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1" >Cidade</label>
                                {{-- <select class="form-control" name="city" id="cidades" data-code="" onclick="setDistricts(event)">
                                    <option selected disabled>Selecione sua cidade</option>
                                </select> --}}
                                <input type="text" name="city" placeholder="Cidade" class="form-control">
>>>>>>> 03263021ec346db5812276281ddd57ce3156a49c
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1" >Bairro</label>
                                {{-- <select class="form-control" id="bairros" name="district">
                                    <option selected disabled>Selecione seu Bairro</option>
                                </select> --}}
<<<<<<< HEAD
                                <input type="text" name="district" value="{{$employee->address->district}}" placeholder="Bairro" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputFile">Rua</label>
                                <input type="text" class="form-control" name="street" value="{{$employee->address->street}}" id="exampleInputFile" placeholder="nome da rua">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputFile">CEP</label>
                                <input type="text" class="form-control" name="zipcode" value="{{$employee->address->zipcode}}" id="exampleInputFile" placeholder="CEP">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputFile">Numero</label>
                                <input type="text" class="form-control" name="number" value="{{$employee->address->number}}" id="exampleInputFile" placeholder="numero da casa">
=======
                                <input type="text" name="district" placeholder="Bairro" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputFile">Rua</label>
                                <input type="text" class="form-control" name="street" id="exampleInputFile" placeholder="nome da rua">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputFile">CEP</label>
                                <input type="text" class="form-control" name="zipcode" id="exampleInputFile" placeholder="CEP">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputFile">Numero</label>
                                <input type="text" class="form-control" name="number" id="exampleInputFile" placeholder="numero da casa">
>>>>>>> 03263021ec346db5812276281ddd57ce3156a49c
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados Bancários</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Banco</label>
<<<<<<< HEAD
                            <input type="text" class="form-control" name="bank" value="{{$employee->bankData->bank}}" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtext1">Numero da conta</label>
                            <input type="text" class="form-control" name="account_number" value="{{$employee->bankData->account_number}}" id="exampleInputtext1" placeholder="text">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtext1">Agencia</label>
                            <input type="text" class="form-control" name="agency" value="{{$employee->bankData->agency}}" id="exampleInputtext1" placeholder="text">
=======
                            <input type="text" class="form-control" name="bank" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtext1">Numero da conta</label>
                            <input type="text" class="form-control" name="account_number" id="exampleInputtext1" placeholder="text">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtext1">Agencia</label>
                            <input type="text" class="form-control" name="agency" id="exampleInputtext1" placeholder="text">
>>>>>>> 03263021ec346db5812276281ddd57ce3156a49c
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados do Contrato</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cargo</label>
<<<<<<< HEAD
                            <input type="text" name="cargo" value="{{$employee->contract->cargo}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtext1">Salario</label>
                            <input type="text" name="salary" value="{{$employee->contract->salary}}" class="form-control" id="exampleInputtext1" placeholder="text">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtext1">Data de Admisão</label>
                            <input type="date" name="admission_date" value="{{$employee->contract->admission_date}}" class="form-control" id="exampleInputtext1" placeholder="text">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtext1">Data da Dispensa</label>
                            <input type="date" name="dismission_date" value="{{$employee->contract->dismission_date}}" class="form-control" id="exampleInputtext1" placeholder="text">
=======
                            <input type="text" name="cargo" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtext1">Salario</label>
                            <input type="text" name="salary" class="form-control" id="exampleInputtext1" placeholder="text">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtext1">Data de Admisão</label>
                            <input type="date" name="admission_date" class="form-control" id="exampleInputtext1" placeholder="text">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtext1">Data da Dispensa</label>
                            <input type="date" name="dismission_date" class="form-control" id="exampleInputtext1" placeholder="text">
>>>>>>> 03263021ec346db5812276281ddd57ce3156a49c
                        </div>
                    </div>
            </div>
        </div>
    </div>
</form>
@endsection
