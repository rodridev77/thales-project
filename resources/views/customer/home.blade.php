@extends('content_container_card')
@php
$title = "Clientes";
@endphp
@section('card-tools')
<button type="button" class="btn btn-success" onclick="loadViewInHome('{{route('customer.create')}}')"><i
        class="fas fa-plus"></i> Adicionar Cliente</button>
@endsection
@section('card-body')
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>Cliente 1</td>
            <td>0000000</td>
            <td>11111111</td>
            <td>
                <button class="btn btn-xs btn-info"
                    onclick="loadViewInHome()"><i
                        class="fa fa-edit"></i></button>
                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#exampleModal"
                    data-employeeid=""><i class="fa fa-trash"></i></button>
                <button class="btn btn-xs btn-success" onclick="loadViewInHome()"><i
                        class="fa fa-eye"></i></button>
            </td>
        </tr>

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
                <form id="delete" data-saveemployee="" method="DELETE">
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
<script>
$(function() {
    $("form#delete1").on("submit", function(e) {
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
});
</script>
@endsection
