@extends('content_container_card')
@php
$title = "Atualização de Funcionario";
$route = route("funcionarios.index");
@endphp
@section('card-body')
<form data-sendrequest="{{route('funcionarios.update',$data->id)}}" method="POST">
    @method('PUT')
    @csrf
    <div class="row">
        <div id="errors" class="alert alert-danger d-none">
            <ul>
            </ul>
        </div>
        <div class="col-md-12 connectedSortable ui-sortable">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Dados Pessoais</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Foto</label><br />
                            <img width="65" src="{{ URL::to($data->image) }}" height="65" id="avatar" />
                            <input type="file" name="image" class="form-control" id="frmavatar" placeholder="avatar" style="height: 65px; margin-top: -65px; opacity: 0">
                        </div>

                        <div class="form-group col-md-8">
                            <label for="exampleInputEmail1">Loja</label>
                            <select class="form-control" id="exampleInputtext1" name="shop_id">
                                @foreach ($globalShops as $shop)
                                <option @if($shop->id === $data->shop_id) selected @endif value="{{ $shop->id }}">{{ $shop->fantasyname }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="exampleInputEmail1">Nome Completo</label>
                            <input type="text" name="name" value="{{$data->name}}" class="form-control" id="exampleInputEmail1" placeholder="Nome completo">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Data de Nascimento</label>
                            <input type="date" name="birthday" value="{{date_format(new DateTime($data->birthday),'Y-m-d')}}" class="form-control" placeholder="data de Nascimento">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">CPF</label>
                            <input type="text" name="cpf" value="{{$data->cpf}}" class="form-control" id="exampleInputtext1" placeholder="CPF">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">RG</label>
                            <input type="text" name='rg' value="{{$data->rg}}" class="form-control" id="exampleInputtext1" placeholder="RG">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Telefone</label>
                            <input type="text" name="phone" value="{{$data->phone}}" class="form-control" id="exampleInputtext1" placeholder="Numero de telefone">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputtext1">Nome da Mãe</label>
                            <input type="text" name="mother_name" value="{{$data->mother_name}}" class="form-control" id="exampleInputtext1" placeholder="Nome da mãe">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputtext1">Nome do Pai</label>
                            <input type="text" name="father_name" value="{{$data->father_name}}" class="form-control" id="exampleInputtext1" placeholder="Nome do pai">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Gênero</label>
                            <select class="form-control" id="exampleInputtext1" name="gender">
                                <option @if($data->gender == "masculino") selected @endif value="masculino">Masculino</option>
                                <option @if($data->gender == "Feminino") selected @endif value="Feminino">Feminino</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Escolaridade</label>
                            <select class="form-control" id="exampleInputtext1" name="level_of_schooling">
                                <option disabled>Selecione sua Escolaridade</option>
                                <option @if($data->level_of_schooling == "Ensino Fundamental") selected @endif value="Ensino Fundamental">Ensino Fundamental</option>
                                <option @if($data->level_of_schooling == "Ensino Fundamental incompleto") selected @endif value="Ensino Fundamental incompleto">Ensino Fundamental incompleto</option>
                                <option @if($data->level_of_schooling == "Ensino Medio") selected @endif value="Ensino Medio">Ensino Medio</option>
                                <option @if($data->level_of_schooling == "Ensino Medio incompleto") selected @endif value="Ensino Medio incompleto">Ensino Medio incompleto</option>
                                <option @if($data->level_of_schooling == "Ensino Medio técnico") selected @endif value="Ensino Medio técnico">Ensino Medio técnico</option>
                                <option @if($data->level_of_schooling == "Ensino Superior") selected @endif value="Ensino Superior">Ensino Superior</option>
                                <option @if($data->level_of_schooling == "Não Alfabetizado") selected @endif value="Não Alfabetizado">Não Alfabetizado</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputtext1">Email</label>
                            <input type="email" name="email" value="{{$data->email}}" class="form-control" id="exampleInputtext1" placeholder="Email">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 connectedSortable ui-sortable">
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
                            <input type="text" class="form-control" name="zipcode" value="{{$data->address ? $data->address->zipcode : ''}}" id="exampleInputFile" placeholder="CEP">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Estado</label>
                            {{-- <select class="form-control" name="uf" id="estados" onchange="setCities(event)">
                                    <option selected disabled>Selecione seu estado</option>
                                </select> --}}
                            <input type="text" name="uf" value="{{$data->address ? $data->address->uf : ''}}" placeholder="Estado" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Cidade</label>
                            {{-- <select class="form-control" name="city" value="{{$data->address ? $data->address->city : ''}}" id="cidades" data-code="" onclick="setDistricts(event)">
                            <option selected disabled>Selecione sua cidade</option>
                            </select> --}}
                            <input type="text" name="city" value="{{$data->address ? $data->address->city : ''}}" placeholder="Cidade" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Bairro</label>
                            {{-- <select class="form-control" id="bairros" name="district">
                                    <option selected disabled>Selecione seu Bairro</option>
                                </select> --}}
                            <input type="text" name="district" value="{{$data->address ? $data->address->district : ''}}" placeholder="Bairro" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputFile">Rua</label>
                            <input type="text" class="form-control" name="street" value="{{$data->address ? $data->address->street : ''}}" id="exampleInputFile" placeholder="Nome da rua">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputFile">Numero</label>
                            <input type="number" class="form-control" name="number" value="{{$data->address ? $data->address->number : ''}}" id="exampleInputFile" placeholder="Número da casa">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 connectedSortable ui-sortable">
            <div class="card    ">
                <div class="card-header">
                    <h3 class="card-title">Dados Bancários</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Banco</label>
                        <input type="text" class="form-control" name="bank" value="{{$data->bankData ? $data->bankData->bank : ''}}" id="exampleInputEmail1" placeholder="Banco">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtext1">Número da conta</label>
                        <input type="number" class="form-control" name="account_number" value="{{$data->bankData ? $data->bankData->account_number : ''}}" id="exampleInputtext1" placeholder="Número de Conta">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtext1">Agência</label>
                        <input type="number" class="form-control" name="agency" value="{{$data->bankData ? $data->bankData->agency : ''}}" id="exampleInputtext1" placeholder="Agência">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 connectedSortable ui-sortable">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Dados do Contrato</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Cargo</label>
                        <input type="text" name="cargo" value="{{$data->contract->cargo ?? ''}}" class="form-control" id="exampleInputEmail1" placeholder="Cargo">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtext1">Salário</label>
                        <input type="text" name="salary" data-money value="{{$data->contract->salary ?? ''}}" class="form-control" id="exampleInputtext1" placeholder="Salário">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtext1">Data de Admisão</label>
                        <input type="date" name="admission_date" value="{{$data->contract->admission_date ?? ''}}" class="form-control" id="exampleInputtext1" placeholder="Data de Admissao">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtext1">Data da Dispensa</label>
                        <input type="date" name="dismission_date" value="{{$data->contract->dismission_date ?? ''}}" class="form-control" id="exampleInputtext1" placeholder="Data de demissao">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-success btn-lg" type="submit"> <i class="fa fa-check"></i> Salvar</button>
        </div>
    </div>
</form>
<script>
    $("#frmavatar").on("change", function() {
        var input = document.getElementById("frmavatar");
        var fReader = new FileReader();
        fReader.readAsDataURL(input.files[0]);
        fReader.onloadend = function(event) {
            var img = document.getElementById("avatar");
            img.src = event.target.result;
        }
    });
    $(document).ready(function() {
        $(document).getAddress();
    })
</script>
@endsection
