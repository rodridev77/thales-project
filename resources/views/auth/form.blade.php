@extends('auth.template')

@section('form-card')
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Login de Funcionários</p>

        <form method="post" id="signin-form" action="{{route("admin.login")}}">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="email" id="signin-cpf" class="form-control" placeholder="Email"
                    required="">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password" id="signin-pass" class="form-control"
                    placeholder="Senha" required="">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <p class="mb-1">
                    <a href="" class="recovery-pass-text">Esqueci a senha</a>
                    </p>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block admin-auth-btn">Entrar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

    </div>
    <!-- /.login-card-body -->
</div>
@endsection
