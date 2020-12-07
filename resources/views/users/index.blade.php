@extends('content_container_card')
@php
$title = "Usuários";
$route = route("settings.home");
@endphp
@section('card-tools')
<button type="button" class="btn btn-success" onclick="loadViewInHome('{{route('user.create')}}')"><i
        class="fas fa-plus"></i>Adicionar Usuário</button>
@endsection
@section('card-body')
@if (count($data) > 0)
<table id="layout-um" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th class="col-md-5">Nome</th>
            <th class="col-md-5">Email</th>
            <th class="col-md-2">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>
                <button class="btn btn-xs btn-info" onclick="loadViewInHome('{{route('user.edit',$item->id)}}')"><i
                        class="fa fa-edit"></i></button>
                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#user-delete"
                    data-userid="{{$item->id}}"><i class="fa fa-trash"></i></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="modal" id="user-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Deletar Usuário</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Você realmente deseja excluir este usuário ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <form id="delete" data-sendrequest="{{route('user.destroy',$item->id)}}" method="DELETE">
                    @method("DELETE")
                    <button class="btn btn-primary" data-dismiss="modal">Não</button>
                    <button class="btn btn-danger pull-right" id="confirm-delete">Sim</button>
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
    $("#layout-um").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
});

$('#user-delete').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('userid') // Extract info from data-* attributes
    let modalButton = $("#confirm-delete");

    modalButton.on("click", function() {

        axios.delete(`${'{{url("user/destroy")}}'}/${id}`)
            .then((response) => {
                if (response.status === 200) {

                    Toast.fire({
                        icon: 'success',
                        title: 'Usuário Exclúido'
                    });
                    $('#user-delete').modal("hide");
                    loadViewInHome('{{route('user.index')}}');
                }
            })
            .catch((err) => {
                if (err.response.status === 500) {
                    Toast.fire({
                        icon: 'error',
                        title: 'Houve um erro tente novamente , ou contacte o suporte'
                    });
                }
            });
    });

});
</script>
@endsection
