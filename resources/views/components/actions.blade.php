@isset($buttons['edit'])
<button class="btn btn-xs" onclick='loadViewInHome("{{route("$route.edit",$id)}}")' id="employee-edit"><img src="../../images/icon-edit.png" title="Editar" width="24px"></button>
@endisset
@isset($buttons['destroy'])
<button class="btn btn-xs" data-toggle="modal" data-target="#exampleModal" data-id="{{$id}}" id="employee-delete"><img src="../../images/icon-trash.png" title="Remover" width="24px"></button>
@endisset
@isset($buttons['view'])
<button class="btn btn-xs" onclick='loadViewInHome("{{route("$route.show",$id)}}")' id="employee-view"><img src="../../images/icon-view.png" title="Ver" width="24px"></button>
@endisset
