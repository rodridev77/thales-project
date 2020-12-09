@extends('content_container_card')
@php
$title = "Usuários";
$route = route("settings.home");
@endphp
@section('card-tools')
<button type="button" class="btn btn-success" onclick="loadViewInHome('{{route('user.create')}}')"><i class="fas fa-plus"></i> Adicionar Usuário</button>
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
                @include('components.actions', [
                'id' => $item->id,
                'route' => "user",
                'buttons' =>
                [
                'edit' => true,
                'destroy' => true
                ]
                ])</td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="modal" id="exampleModal">
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
                <form id="delete" data-sendrequest="" method="DELETE">
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
        $("button#confirm-delete").on("click", function(e) {
            $('#exampleModal').modal('hide');
        })

        $("#layout-um").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });

    $('#exampleModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        let Id = button.attr('data-id');
        $("form#delete").attr('data-sendrequest', '/sku/' + Id)
    });
</script>
@endsection
