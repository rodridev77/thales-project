@extends('content_container_card')

@php
$title = "Cadastro de Usuário";
@endphp
@section('card-tools')

@endsection
@section('card-body')

<form autocomplete="off" data-submitajax='{{route('user.store')}}' id="create_user" method="POST">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <label for="password">Senha</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Senha">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-12">
            <label for="employee_id">Funcionário</label>
            <select class="form-control" id="employee_id" name="employee_id">
                <option> Nenhum </option>
                @if (!empty($employeesList)) :
                @foreach ($employeesList as $emp)
                <option value="{{$emp->id}}">
                    {{$emp->name}}
                </option>
                @endforeach
                @endif;
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
@endsection