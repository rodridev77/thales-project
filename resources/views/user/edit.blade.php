@extends('content_container_card')

@php
$title = "Edição de Usuário";
$route = route("user.home");
@endphp
@section('card-tools')

@endsection
@section('card-body')

<form autocomplete="off" data-submitajax="{{url('/user/update/'.$user->id)}}" id="" method="POST">
    @csrf
    @method('PUT')
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nome" value="{{$user->name}}" required="required">
        </div>
        <div class="form-group col-md-6">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{$user->email}}" required="required">
        </div>
        <div class="form-group col-md-6">
            <label for="password">Senha</label>
            <input type="password" class="form-control" name="password" id="password" value="{{$user->password}}" placeholder="Senha" required="required">
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection