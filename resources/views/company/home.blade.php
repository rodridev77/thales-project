<div class="container-fluid" style="margin-top: -10px; margin-bottom:10px;">
    <div class="row">
        <div class="col-sm-12">
            <a href="#" onclick="">
                <i class='fas fa-arrow-left' style='font-size:16px;color: rgba(0, 123, 255, .7);'></i><span
                    style="margin-left:5px">voltar</span>
            </a>
        </div>
    </div>
</div>


@extends('content_container_card')
@php
    $title = "Perfil do Funcionario"
@endphp
@section('card-body')
<div class="row">
    <div class="col-md-3">

      <!-- Profile Image -->
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-circle"
                 src="data:image/jpeg;base64,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"
                 alt="User profile picture">
          </div>

        <h3 class="profile-username text-center">Loja 01</h3>

          <p class="text-muted text-center">aksasas</p>

          <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
              <b>Data de Criação</b> <a class="float-right">Teste</a>
            </li>
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
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
              </div>
        </div>
      </div>
      <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
  </div>
@endsection