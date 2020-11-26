<section class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <a href="#" onclick="loadViewInHome('{{$route}}')">
                    <i class='fas fa-arrow-left' style='font-size:16px;color: rgba(0, 123, 255, .7);'></i><span style="margin-left:5px">voltar</span>
                </a>
                {{$title ?? ""}}
            </h3>
            <div class="card-tools">
                @yield('card-tools')
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @yield('card-body')
        </div>
        <!-- /.card-body -->
    </div>
</section>
