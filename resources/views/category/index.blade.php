@extends('content_container_card')
@php
$title = "Lista de Categorias";
$route = route('settings.home');
@endphp
@section('card-tools')
<button type="button" class="btn btn-success" onclick="loadViewInHome('{{route('categorias.create')}}')"><i class="fas fa-plus"></i> Cadastrar Categoria</button>
@endsection
@section('card-body')
@if (count($data) > 0)
<table id="layout-um" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th class="col-md-6">Nome</th>
            <th>Categoria Pai</th>
            <th class="col-md-2">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $category)
        <tr>
            <td>{{$category->name}}</td>
            <td>
                @if($category->subcategory === null)
                Nenhum
                @endif
                @foreach($data as $item)
                @if($item->id == $category->subcategory)
                {{$item->name}}
                @endif
                @endforeach
            </td>
            <td>
                @include('components.actions', [
                'id' => $category->id,
                'route' => "categorias",
                'buttons' => [
                'edit' => true,
                'destroy' => true
                ]
                ]) </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="modal " id="exampleModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Deletar Categoria</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Você Realmente deseja excluir essa categoria ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <form id="delete" data-sendrequest="{{url('/categorias/'.$item->id)}}" method="DELETE">
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
<p>Nenhuma categoria cadastrada</p>
@endif
<script>
    $(function() {
        $("#layout-um").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });

    $('#exampleModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        let Id = button.attr('data-id');
        $("form#delete").attr('data-sendrequest', '/categorias/' + Id)
    });

    function loadSkuForm() {
        $('#create-sku-form').modal('show');
    }
</script>
@endsection
