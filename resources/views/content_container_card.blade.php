<section class="container">
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">
                {{$title ?? ""}}
            </h1>
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
