@extends('content_container_card')
@php
$title = "Funcionarios";
@endphp
@section('card-tools')
<button type="button" class="btn btn-success" onclick="loadViewInHome('{{route('employees.create')}}')"><i class="fas fa-plus"></i>Adicionar Funcionario</button>
@endsection
@section('card-body')
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
                <a class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                <a class="btn btn-xs btn-danger" data-toggle="modal" data-target="#exampleModal" data-employeeid="{{$employee->id}}"><i class="fa fa-trash"></i></a>
                <a class="btn btn-xs btn-success" onclick="loadViewInHome('{{url('funcionarios/'.$employee->id)}}')"><i class="fa fa-eye"></i></a>
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
                <form id="delete" action="{{url('funcionarios/'.$employee->id))}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Não</button>
                    <button id="delete" type="submit" class="btn btn-outline-light" id="confirm-delete">Sim</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script>
    $(function() {
        $("form#delete").on("submit", function(e) {
            fetch($(this).attr("action"), {
                    method: 'DELETE',
                })
                .then(res => {
                    let response = res.json();
                    console.log(res)
                    alert("deletado com sucesso")
                }).then(res => console.log(res))
        })
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
