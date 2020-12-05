@extends('content_container_card')

@php
$title = "Edição de Usuário";
$route = route("user.index");
@endphp
@section('card-tools')

@endsection
@section('card-body')

<form autocomplete="off" data-submitajax="{{route('user.update',$data->id)}}" id="" method="POST">
    @csrf
    @method('PUT')
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nome" value="{{$data->name}}" required="required">
        </div>
        <div class="form-group col-md-6">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{$data->email}}" required="required">
        </div>
        <div class="form-group col-md-6">
            <label for="password">Senha</label>
            <input type="password" class="form-control" name="password" id="password" value="{{$data->password}}" placeholder="Senha" required="required">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-12">
            <label for="employee_id">Funcionário</label>
            <select class="form-control" id="employee_id" name="employee_id" required="required">
                <option disabled> Nenhum </option>
                @if (!empty($globalEmployees)) :
                @foreach ($globalEmployees as $emp)
                <option @if($data->employee_id == $emp->id) selected @endif value="{{$emp->id}}">
                    {{$emp->name}}
                </option>
                @endforeach
                @endif;
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection
