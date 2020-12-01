<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lojas West</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed" style="font-size: 14px">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link float-right" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- SEARCH FORM -->

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Busca"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item ml-3">
                    <a class="btn btn-md btn-danger" href="{{route('admin.logout')}}">Sair</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Loja 1.0</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->employee()->name ?? Auth::user()->name }} </a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <tw class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item border-bottom">
                            <a href="#" class="nav-link" onclick="loadViewInHome('{{route('home')}}')">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Inicio
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border-bottom">
                            <a href="#" class="nav-link" onclick="loadViewInHome('{{url('lojas')}}')">
                                <i class="nav-icon fas fa-store-alt"></i>
                                <p>
                                    Lojas <span data-toggle="tooltip" title="{{count($globalShops)}} Lojas Cadastradas"
                                        class="badge bg-success">{{count($globalShops)}}</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border-bottom">
                            <a href="#" class="nav-link" onclick="loadViewInHome('{{route('customer.home')}}')">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Clientes
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border-bottom">
                            <a href="#" class="nav-link" onclick="loadViewInHome('{{url('funcionarios')}}')">
                                <i class="nav-icon fas fa-people-carry"></i>
                                <p>
                                    Funcionarios <span data-toggle="tooltip"
                                        title="{{count($globalEmployees)}} Funcionarios Cadastrados"
                                        class="badge bg-success">{{count($globalEmployees)}}</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border-bottom">
                            <a href="#" class="nav-link" onclick="loadViewInHome('{{route('produtos.index')}}')">
                                <i class="nav-icon fas fa-barcode"></i>
                                <p>
                                    Produtos <span data-toggle="tooltip"
                                        title="{{count($globalProducts)}} Produtos Cadastrados"
                                        class="badge bg-success">{{count($globalProducts)}}</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border-bottom">
                            <a href="#" class="nav-link" onclick="loadViewInHome('{{route('fornecedores.index')}}')">
                                <i class="nav-icon fas fa-truck"></i>
                                <p>
                                    Fornecedores <span data-toggle="tooltip"
                                        title="{{count($globalProviders)}} Fornecedores Cadastrados"
                                        class="badge bg-success">{{count($globalProviders)}}</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border-bottom">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-cubes"></i>
                                <p>
                                    Estoque
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border-bottom">
                            <a href="#" class="nav-link" onclick="loadViewInHome('{{route('settings.home')}}')">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    Configurações
                                </p>
                            </a>
                        </li>
                    </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div style="height: 100vh" class="d-none" id="spinner">
                <div class="d-flex justify-content-center align-items-center  h-100">
                    <div class="text-center">
                        <div class="spinner-border" style="width: 5rem; height: 5rem;" role="status">
                            <span class="sr-only">Carregando...</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="home_menu_container" class="py-2">
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
                                <a href="#" onclick="loadViewInHome('{{route('funcionarios.index')}}')"
                                    class="small-box-footer">Mais Detalhes <i class="fas fa-arrow-circle-right"></i></a>
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
                                <a href="#" onclick="loadViewInHome('{{route('lojas.index')}}')"
                                    class="small-box-footer">Mais Detalhes <i class="fas fa-arrow-circle-right"></i></a>
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
                                <a href="#" onclick="loadViewInHome('{{route('fornecedores.index')}}')"
                                    class="small-box-footer">Mais Detalhes <i class="fas fa-arrow-circle-right"></i></a>
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
                                <a href="#" onclick="loadViewInHome('{{route('produtos.index')}}')"
                                    class="small-box-footer">Mais Detalhes <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">

            </div>
            <strong>Software Management <a href="http://adminlte.io">West </a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->

    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables/pt-translate.js"></script>

    <script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>

    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/ajaxRequests.js')}}"></script>
    <script src="{{asset('js/commonmethods.js')}}"></script>


    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false
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
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
    </script>
    <script>
    function loadViewInHome(url) {
        $("#home_menu_container").html("");

        $("#spinner").removeClass("d-none");

        axios.get(url).then((response) => {
            $("#spinner").addClass("d-none");
            $("#home_menu_container").html(response.data);
        });
    }
    // Save Employee from request
    request.makeRequest("data-saveemployee", (response) => {
        if (response.status === 500) {
            Toast.fire({
                icon: 'error',
                title: 'Houve um erro tente novamente , ou contacte o suporte'
            });
        }
        if (response.status === 200) {
            Toast.fire({
                icon: 'success',
                title: 'Funcionario Cadastrado'
            });
        }
    });
    // Delete Employee form request
    request.makeRequest("data-deleteemployee", (response) => {
        if (response.status === 500) {
            Toast.fire({
                icon: 'error',
                title: 'Houve um erro tente novamente , ou contacte o suporte'
            });
        }
        if (response.status === 200) {
            Toast.fire({
                icon: 'success',
                title: 'Funcionario Deletado'
            });
            loadViewInHome("{{url('/funcionarios/')}}")
        }
    });

    // Save SKU from request
    request.makeRequest("data-savesku", (response) => {
        if (response.status === 500) {
            Toast.fire({
                icon: 'error',
                title: 'Houve um erro tente novamente , ou contacte o suporte'
            });
        }
        if (response.status === 200) {
            Toast.fire({
                icon: 'success',
                title: 'SKU Cadastrado'
            });
        }
    });
    // Send request Dinamically
    request.makeRequest("data-sendrequest", (response) => {
        console.log(response);
        if (response.status === 500) {
            Toast.fire({
                icon: 'error',
                title: response.data[0]
            });
        }
        if (response.status === 200) {
            Toast.fire({
                icon: 'success',
                title: response.data[0]
            });
        }
    });

    // Save SKU from request TESTE
    request.makeRequest("data-submitajax", (response) => {
        if (response.status === 500) {
            Toast.fire({
                icon: 'error',
                title: response.data.message
            });
        }
        if (response.status === 200) {
            Toast.fire({
                icon: 'success',
                title: response.data.message
            });
        }
    });
    </script>
</body>

</html>