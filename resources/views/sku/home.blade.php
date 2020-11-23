@extends('content_container_card')
@php
    $title = "Tabela de Código SKU";
@endphp
@section('card-tools')
    <button type="button" class="btn btn-success" onclick="loadViewInHome('{{route('sku.create')}}')"><i
            class="fas fa-plus"></i>Cadastrar SKU</button>
@endsection
@section('card-body')
    <table id="layout-um" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Código</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>

            <tr>
                <td></td>
                <td></td>
                <td>
                    <button class="btn btn-xs btn-info"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#sku-delete"><i class="fa fa-trash"></i></button>
                    <button class="btn btn-xs btn-success"
                            ><i
                            class="fa fa-eye"></i></button>
                </td>
            </tr>

        </tbody>
    </table>

    <div class="modal " id="sku-delete">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">
                <div class="modal-header">
                    <h4 class="modal-title">Deletar SKU</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Você Realmente deseja excluir este sku?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Não</button>
                    <button type="button" class="btn btn-outline-light" id="confirm-delete">Sim</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <script>
        $(function () {
            $("#layout-um").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });

        $('#sku-delete').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('sku') // Extract info from data-* attributes
            let  modalButton = $("#confirm-delete");

            modalButton.on("click",function(){

                axios.delete(`${'{{url("sku")}}'}/${id}`)
                    .then((response) => {
                        if (response.status === 200) {

                            Toast.fire({
                                icon: 'success',
                                title: 'Sku Exclúido'
                            });
                            $('#sku-delete').modal("hide");
                            loadViewInHome('{{route('sku.home')}}')
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
