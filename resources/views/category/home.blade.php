@extends('content_container_card')
@php
$title = "Tabela de Código SKU";
@endphp
@section('card-tools')
<button type="button" class="btn btn-success" onclick="loadViewInHome('{{route('category.create')}}')"><i class="fas fa-plus"></i>Cadastrar Categoria</button>
@endsection
@section('card-body')
@if (count($categoryList) > 0)
<table id="layout-um" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($categoryList as $category)
        <tr>
            <td>{{$category->name}}</td>
            <td>
                <button class="btn btn-xs btn-info" onclick="loadViewInHome('{{url('category/edit/'.$category->id)}}')"><i class="fa fa-edit"></i></button>
                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#category-delete" data-category-id="{{$category->id}}"><i
                        class="fa fa-trash"></i></button>
                <button class="btn btn-xs btn-success"><i class="fa fa-eye"></i></button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@else
<p>Nenhuma categoria cadastrada</p>
@endif

<div class="modal " id="category-delete">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">Deletar Categoria</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Você Realmente deseja excluir esta categoria?</p>
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
$(function() {
    $("#layout-um").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
});

$('#sku-delete').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('category-id') // Extract info from data-* attributes
    let modalButton = $("#confirm-delete");

    modalButton.on("click", function() {

        axios.delete(`${'{{url("category/destroy")}}'}/${id}`)
            .then((response) => {
                if (response.status === 200) {

                    Toast.fire({
                        icon: 'success',
                        title: 'Categoria Excluída'
                    });
                    $('#category-delete').modal("hide");
                    loadViewInHome('{{route('category.home')}}');
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