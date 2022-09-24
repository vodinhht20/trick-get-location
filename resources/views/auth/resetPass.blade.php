@extends('auth.layouts.main')
@section('Lấy lại mật khẩu')
@section('content')
    <div class="container-fluid p-0">
        <div class="card">
            <div class="card-body">

                <div class="text-center mt-4">
                    <div class="mb-3">
                        <a href="{{ route('home') }}" class="auth-logo">
                            <img src="{{ asset('/') }}assets/images/logo-dark.png" height="30" class="logo-dark mx-auto" alt="">
                            <img src="{{ asset('/') }}assets/images/logo-light.png" height="30" class="logo-light mx-auto"
                                alt="">
                        </a>
                    </div>
                </div>

                <h4 class="text-muted text-center font-size-18"><b>Khôi phục mật khẩu</b></h4>

                <div class="p-3">
                    <form class="form-horizontal mt-3" action="index.html">

                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            Nhập <strong>E-mail</strong> khôi phục tài khoản của bạn!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <div class="form-group mb-3">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" required="" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group pb-2 text-center row mt-3">
                            <div class="col-12">
                                <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Lấy lại mật khẩu</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end cardbody -->
        </div>
        <!-- end card -->
    </div>
@endsection
