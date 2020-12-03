@extends('content_container_card')

@php
$title = "Tabela de Código SKU";
$route = route("settings.home");
@endphp
@section('card-tools')
<button type="button" class="btn btn-success" onclick="loadSkuForm();"><i class="fas fa-plus"></i>Cadastrar SKU</button>
@endsection
@section('card-body')
@if (count($skuList) > 0)
<table id="layout-um" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Código</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($skuList as $sku)
        <tr>
            <td class="sku-cod">{{$sku->cod}}</td>
            <td class="sku-description">{{$sku->description}}</td>
            <td>
                <button class="btn btn-xs btn-info" onclick="loadViewInHome('{{url('sku/edit/'.$sku->id)}}')"><i class="fa fa-edit"></i></button>
                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#sku-delete" data-sku-id="{{$sku->id}}"><i
                        class="fa fa-trash"></i></button>
                <button class="btn btn-xs btn-success"><i class="fa fa-eye"></i></button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@else
<p>Nenhum código SKU cadastrado</p>
@endif

<div class="modal fade" id="create-sku-form" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header support-title-bar">
                <h5 class="modal-title">Cadastrar SKU</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container" id="">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 mb-3">
                            <form data-submitajax='{{route('sku.store')}}' method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-sm-12">
                                        <label for="cod">Código SKU: </label>
                                        <input type="text" class="form-control" name="cod" id="cod"
                                            required="required" value="">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-sm-12">
                                        <label for="description">Description: </label>
                                        <input type="text" class="form-control" name="description" id="description"
                                            required="required" value="">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" name="enviar">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="sku-delete">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Deletar SKU</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Você Realmente deseja excluir este sku?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
                <button type="button" class="btn btn-success" id="confirm-delete">Sim</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script>
$(function() {
    $("#layout-um").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
});

$('#sku-delete').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('sku-id') // Extract info from data-* attributes
    let modalButton = $("#confirm-delete");

    modalButton.on("click", function() {

        axios.delete(`${'{{url("sku/destroy")}}'}/${id}`)
            .then((response) => {
                if (response.status === 200) {

                    Toast.fire({
                        icon: 'success',
                        title: 'Sku Exclúido'
                    });
                    $('#sku-delete').modal("hide");
                    loadViewInHome('{{route('sku.home')}}');
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

function loadSkuForm() {
    $('#create-sku-form').modal('show');
}

</script>
@endsection