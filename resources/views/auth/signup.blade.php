@extends('auth.layouts.main')
@section('title', ' Đăng ký')
@section('content')
    <div class="container-fluid p-0">
        <div class="card">
            <div class="card-body">
                <div class="text-center mt-4">
                    <div class="mb-3">
                        <a href="{{ route('home') }}" class="auth-logo">
                            <img src="{{ asset('/') }}assets/images/logo-dark.png" height="30"
                                class="logo-dark mx-auto" alt="">
                            <img src="{{ asset('/') }}assets/images/logo-light.png" height="30"
                                class="logo-light mx-auto" alt="">
                        </a>
                    </div>
                </div>
                <h4 class="text-muted text-center font-size-18"><b>Đăng ký</b></h4>
                <div class="p-3">
                    <form class="form-horizontal mt-3" action="index.html">
                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <input class="form-control" type="email" required="" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <input class="form-control" type="text" required="" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <input class="form-control" type="password" required="" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="form-label ms-1 fw-normal" for="customCheck1">Tôi chấp nhận <a
                                            href="#" class="text-muted">các điều khoản và điều kiện</a></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center row mt-3 pt-1">
                            <div class="col-12">
                                <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Đăng ký</button>
                            </div>
                        </div>
                        <div class="form-group mt-2 mb-0 row">
                            <div class="col-12 mt-3 text-center">
                                <a href="{{ route('login') }}" class="text-muted">Đã có tài khoản?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
