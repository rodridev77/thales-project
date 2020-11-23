@extends('content_container_card')
@php
$title = "Funcionarios";
@endphp
@section('card-tools')
<button type="button" class="btn btn-success" onclick="loadViewInHome('{{route('employees.create')}}')"><i class="fas fa-plus"></i>Adicionar Funcionario</button>
@endsection
@section('card-body')
@if (count($employees) > 0)
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Cpf</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
            <td>{{$employee->name}}</td>
            <td>{{$employee->contract->cargo ?? "gerente"}}</td>
            <td>{{$employee->cpf}}</td>
            <td>{{$employee->phone}}</td>
            <td>
                <button class="btn btn-xs btn-info" onclick="loadViewInHome('{{url('funcionarios/edit/'.$employee->id)}}')"><i class="fa fa-edit"></i></button>
                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#exampleModal" data-employeeid="{{$employee->id}}"><i class="fa fa-trash"></i></button>
                <button class="btn btn-xs btn-success" onclick="loadViewInHome('{{url('funcionarios/'.$employee->id)}}')"><i class="fa fa-eye"></i></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="modal " id="exampleModal">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">Deletar Funcionário</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Você Realmente deseja excluir esse funcionario ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <form id="delete" data-saveemployee="{{url('/funcionarios/'.$employee->id)}}" method="DELETE">
                    @method('DELETE')
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Não</button>
                    <button type="submit" class="btn btn-outline-light" id="confirm-delete">Sim</button>
                </form>
            </div>
        </div>
        <!-- /.modaIl-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@else
    <p>Nenhum Registro cadastrado</p>
@endif
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });

    $('#exampleModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
</script>
@endsection
