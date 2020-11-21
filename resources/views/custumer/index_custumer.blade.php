@extends('content_container_card')
@php
    $title = "Clientes";
@endphp
@section('card-tools')
    <button type="button" class="btn btn-success" onclick="loadViewInHome('{{route('cadastro_custumer')}}')"><i
            class="fas fa-plus"></i>Adicionar Cliente</button>
@endsection
@section('card-body')
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Cpf</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button class="btn btn-xs btn-info"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-trash"></i></button>
                    <button class="btn btn-xs btn-success"
                            ><i
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

        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('employeeid') // Extract info from data-* attributes
            let  modalButton = $("#confirm-delete");

            modalButton.on("click",function(){

                axios.delete(`${'{{url("funcionarios")}}'}/${id}`)
                    .then((response) => {
                        if (response.status === 200) {

                            Toast.fire({
                                icon: 'success',
                                title: 'Funcionario Exclúido'
                            });
                            $('#exampleModal').modal("hide");
                            loadViewInHome('{{route('employees')}}')
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
