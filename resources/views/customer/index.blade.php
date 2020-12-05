@extends('content_container_card')
@php
$title = "Clientes";
@endphp
@section('card-tools')
<button type="button" class="btn btn-success" onclick="loadViewInHome('{{route('customer.create')}}')"><i
        class="fas fa-plus"></i> Adicionar Cliente</button>
@endsection
@section('card-body')
@if (count($data) > 0)
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
    @foreach ($data as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->cpf}}</td>
            <td>{{$item->phone}}</td>
            <td>
                <button class="btn btn-xs btn-info"
                    onclick="loadViewInHome('{{route('customer.edit',$item->id)}}')"><i
                        class="fa fa-edit"></i></button>
                        <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#exampleModal"
                                data-employeeid="{{$item->id}}"><i class="fa fa-trash"></i></button>

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
