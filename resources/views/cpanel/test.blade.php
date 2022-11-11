@extends('cpanel.layouts.main')
@section('title', 'Lịch sử giao dịch')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        @include('cpanel.layouts.breadcrumb')
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tạo subdomain</h4>

                        <form class="custom-validation" action="#" novalidate="">
                            <div class="mb-3">
                                <label>Nhập subdomain</label>
                                <div>
                                    <input data-parsley-type="alphanum" type="text" class="form-control" required="" placeholder="Enter subdomain name ...">
                                </div>
                            </div>
                            <div class="mb-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        Tạo Ngay
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
@endsection
