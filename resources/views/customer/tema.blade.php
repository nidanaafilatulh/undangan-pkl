@extends('template.customertemplate')
@section('title', 'Tema')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('title')</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-warning">
                            <div class="card-header text-center">
                                <h3 class="card-title">Tema 1</h3>
                            </div>
                            <div class="card-body text-center">
                                <h4>Harga: Rp200.000</h4>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#" class="btn btn-warning">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-warning">
                            <div class="card-header text-center">
                                <h3 class="card-title">Tema 1</h3>
                            </div>
                            <div class="card-body text-center">
                                <h4>Harga: Rp200.000</h4>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#" class="btn btn-warning">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-warning">
                            <div class="card-header text-center">
                                <h3 class="card-title">Tema 1</h3>
                            </div>
                            <div class="card-body text-center">
                                <h4>Harga: Rp200.000</h4>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#" class="btn btn-warning">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection