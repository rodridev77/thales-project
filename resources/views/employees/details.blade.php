@extends('content_container_card')
@php
$title = "Perfil do Funcionario";
$route = route("funcionarios.index");
@endphp
@section('card-body')
<div class="row">
    <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" style="min-height:65px !important" src="{{$data->image ? $data->image : 'https://minhaagenda.nic.br/palestrantes/foto/1111'}}" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$data->name ?? ''}}</h3>

                <p class="text-muted text-center">{{$data->contract->cargo ?? ''}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Data de Admisão</b> <a class="float-right">{{$data->contract->admission_date ?? ''}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Data da Dispensa</b> <a class="float-right">{{$data->contract->dismission_date ?? "00/00/00"}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Salario</b> <a class="float-right">{{$data->contract->salary ?? ''}}</a>
                    </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Sobre</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Educação</strong>

                <p class="text-muted">
                    {{$data->level_of_schooling}}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Endereço</strong>

                <p class="text-muted">{{$data->address->city}}, {{$data->address->uf}}</p>
                <p class="text-muted">Cep : {{$data->address->zipcode}}</p>
                <p class="text-muted">Rua : {{$data->address->street}},casa {{$data->address->number}}</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Parentesco</strong>

                <p class="text-muted">Nome da mãe {{$data->mother_name}}</p>
                <p class="text-muted">Nome do pai {{$data->father_name}}</p>

                <hr>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Loja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Contrato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Dados Bancarios</a>
                    </li>
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                informações da loja
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <b>Cargo : </b>{{!$data->contract ? "" : $data->contract->cargo}}
                            </li>
                            <li class="nav-item">
                            <b>Salario : </b> R$ @money(!$data->contract ? "0.00" : $data->contract->salary)
                            </li>
                            <li class="nav-item">
                            <b>Registro : </b>@date(!$data->contract ? "" : $data->contract->admission_date)
                            </li>
                            <li class="nav-item">
                            <b>Dispensa : </b>@datetime(!$data->contract ? "" : $data->contract->dismission_date)
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <ul class="nav flex-column">
                            <li class="nav-item">
                                <b>Banco : </b>{{$data->bankData ? $data->bankData->bank : ''}}
                            </li>
                            <li class="nav-item">
                                <b>Agencia : </b> {{$data->bankData ? $data->bankData->agency : ''}}
                            </li>
                            <li class="nav-item">
                                <b>Conta : </b> {{$data->bankData ? $data->bankData->account_number : ''}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
</div>
@endsection
