@extends('content_container_card')
@php
$title = "Lojas";
@endphp
@section('card-tools')
<button type="button" class="btn btn-success" onclick="loadViewInHome('{{url('lojas/create')}}')"><i class="fas fa-plus"></i>Adicionar Loja</button>
@endsection
@section('card-body')
@if (count($data) > 0)
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Nome Fantasia</th>
            <th>Razao Social</th>
            <th>CNPJ</th>
            <th>IE</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->fantasyname}}</td>
            <td>{{$item->companyname}}</td>
            <td>{{$item->cnpj}}</td>
            <td>{{$item->ie}}</td>
            <td>
                <button class="btn btn-xs btn-info" onclick="loadViewInHome('{{url('lojas/'.$item->id.'/edit')}}')"><i class="fa fa-edit"></i></button>
                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#exampleModal" data-shopid="{{$item->id}}"><i class="fa fa-trash"></i></button>
                <button class="btn btn-xs btn-success" onclick="loadViewInHome('{{url('lojas/'.$item->id)}}')"><i class="fa fa-eye"></i></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="modal " id="exampleModal">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">Deletar Loja</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Você Realmente deseja excluir essa loja ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <form id="delete" data-sendrequest="{{url('/lojas/'.$item->id)}}" method="DELETE">
                    @method("DELETE")
                    <button class="btn btn-outline-light" data-dismiss="modal">Não</button>
                    <button class="btn btn-outline-light" id="confirm-delete">Sim</button>
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
