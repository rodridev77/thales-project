<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Loja</h3>

                    <p>Criar nova loja</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                    <ion-icon name="storefront-outline"></ion-icon>
                </div>
                <a href="#" onclick="loadViewInHome('{{route('lojas.index')}}')" id="btnBrand" class="small-box-footer" data-toggle="modal" data-target="#myModal">Ir <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>Categoria</h3>

                    <p>Criar nova caterogia</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer" onclick="loadViewInHome('{{route('categorias.index')}}')">Ir <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>Marca</h3>

                    <p>Criar nova marca</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" onclick="loadViewInHome('{{route('marcas.index')}}')" title="Marcas" id="btnModal" class="small-box-footer" data-toggle="modal" data-target="#myModal">Ir <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>Fornecedor</h3>

                    <p>Criar novo fornecedor</p>
                </div>
                <div class="icon">
                    <i class="fas fa-truck"></i>
                </div>
                <a href="#" onclick="loadViewInHome('{{route('fornecedores.index')}}')" class="small-box-footer">Ir <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>Código SKU</h3>

                    <p>Criar novo código SKU</p>
                </div>
                <div class="icon">
                    <i class="fas fa-barcode"></i>
                </div>
                <a href="#" class="small-box-footer" onclick="loadViewInHome('{{route('sku.index')}}')">Ir <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Usuários</h3>

                    <p>Criar novo usuário</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer" onclick="loadViewInHome('{{route('user.index')}}')">Ir <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
                <h4 class="modal-title">Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Carregando ... &hellip;</p>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
    $(document).ready(function(e) {
        $('#btnModal').on('click', function(e){
            e.preventDefault();
            $("h4.modal-title").html($(this).attr("title"))
            $("div.modal-body").load($(this).attr("href"));
        });

        $('btnBrand').on('click', () => {
            $("div.modal-body").load("ajax/test.html");
        });
    });
</script>
