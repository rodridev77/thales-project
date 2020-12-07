@extends('content_container_card')
@php
$title = "Produtos";
@endphp
@section('card-tools')
<button type="button" class="btn btn-success" onclick="loadViewInHome('{{url('produtos/create')}}')"><i class="fas fa-plus"></i> Adicionar Produto</button>
@endsection
@section('card-body')
@if (count($data) > 0)
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Valor de venda</th>
            <th>SKU</th>
            <th>Marca</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->sale_price}}</td>
            <td>{{$item->sku}}</td>
            <td>
                @foreach($globalBrands as $brand)
                @if($brand->id == $item->brand_id)
                {{$brand->name}}
                @endif
                @endforeach
            </td>
            <td>
                <button class="btn btn-xs btn-info" onclick="loadViewInHome('{{route('produtos.edit',$item->id)}}')"><i class="fa fa-edit"></i></button>
                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#exampleModal" data-id="{{$item->id}}"><i class="fa fa-trash"></i></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="modal " id="exampleModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Deletar Loja</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Você Realmente deseja excluir esse Produto ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <form id="delete" data-sendrequest="{{url('/produtos/'.$item->id)}}" method="DELETE">
                    @method("DELETE")
                    <button class="btn btn-priimary" data-dismiss="modal">Não</button>
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
        $("form#delete").attr('data-sendrequest', '/produtos/' + Id)
    });
</script>
@endsection
