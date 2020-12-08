@extends('content_container_card')
@php
$title = "Funcionarios";
$route = route("funcionarios.index");
@endphp
@section('card-tools')
<button type="button" class="btn btn-success" onclick="loadViewInHome('{{url('funcionarios/create')}}')"><i class="fas fa-plus"></i>Adicionar Funcionario</button>
@endsection
@section('card-body')
@if (count($data) > 0)
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
        @foreach ($data as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->contract->cargo ?? "gerente"}}</td>
            <td>{{$item->cpf}}</td>
            <td>{{$item->phone}}</td>
            <td>
                <button class="btn btn-xs" onclick="loadViewInHome('{{route('funcionarios.edit',$item->id)}}')" id="employee-edit"><img src="../../dist/img/icon-edit.png" title="Editar" width="24px"></button>
                <button class="btn btn-xs" data-toggle="modal" data-target="#exampleModal" data-id="{{$item->id}}" id="employee-delete"><img src="../../dist/img/icon-trash.png" title="Remover" width="24px"></button>
                <button class="btn btn-xs" onclick="loadViewInHome('{{route('funcionarios.show',$item->id)}}')" id="employee-view"><img src="../../dist/img/icon-view.png" title="Ver" width="24px"></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="modal " id="exampleModal">
    <div class="modal-dialog">
        <div class="modal-content">
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
                <form id="delete" data-sendrequest="{{url('/funcionarios/'.$item->id)}}" method="DELETE">
                    @method("DELETE")
                    <button class="btn btn-primary" data-dismiss="modal">Não</button>
                    <button class="btn btn-danger" id="confirm-delete">Sim</button>
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
        $("button#confirm-delete").on("click", function(e) {
            $('#exampleModal').modal('hide');
        })
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
            "oLanguage": {
                "sUrl": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json"
            }
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
        let Id = button.attr('data-id');
        $("form#delete").attr('data-sendrequest', '/funcionarios/' + Id)
    });
</script>
@endsection
