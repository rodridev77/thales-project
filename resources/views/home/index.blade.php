<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{count($globalEmployees)}}</h3>

                    <p>Funcionarios</p>
                </div>
                <div class="icon">
                    <i class="fa fa-truck"></i>
                </div>
                <a href="#" onclick="loadViewInHome('{{route('funcionarios.index')}}')" class="small-box-footer">Mais Detalhes <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{count($globalShops)}}</h3>

                    <p>Lojas</p>
                </div>
                <div class="icon">
                    <i class="fas fa-store-alt"></i>
                </div>
                <a href="#" onclick="loadViewInHome('{{route('lojas.index')}}')" class="small-box-footer">Mais Detalhes <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{count($globalProviders)}}</h3>

                    <p>Fornecedores</p>
                </div>
                <div class="icon">
                    <i class="fas fa-truck"></i>
                </div>
                <a href="#" onclick="loadViewInHome('{{route('fornecedores.index')}}')" class="small-box-footer">Mais Detalhes <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{count($globalProducts)}}</h3>

                    <p>Produtos</p>
                </div>
                <div class="icon">
                    <i class="fas fa-barcode"></i>
                </div>
                <a href="#" onclick="loadViewInHome('{{route('produtos.index')}}')" class="small-box-footer">Mais Detalhes <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
</div>
