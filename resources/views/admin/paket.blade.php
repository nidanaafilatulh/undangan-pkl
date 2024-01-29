@extends('template.main')
@section('title', 'Paket')
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
                                <h3 class="card-title">Paket Gold</h3>
                            </div>
                            <div class="card-body text-center">
                                <h4>Harga: Rp200.000</h4>
                                <p>Deskripsi: Fitur dasar untuk startup atau bisnis kecil.</p>
                                <ul>
                                    <li>Fitur A</li>
                                    <li>Fitur B</li>
                                    <li>Fitur C</li>
                                </ul>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#" class="btn btn-warning">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-secondary">
                            <div class="card-header text-center">
                                <h3 class="card-title">Paket Silver</h3>
                            </div>
                            <div class="card-body text-center">
                                <h4>Harga: Rp150.000</h4>
                                <p>Deskripsi: Fitur dasar untuk startup atau bisnis kecil.</p>
                                <ul>
                                    <li>Fitur A</li>
                                    <li>Fitur B</li>
                                    <li>Fitur C</li>
                                </ul>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#" class="btn btn-secondary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-dark">
                            <div class="card-header text-center">
                                <h3 class="card-title">Paket Bronze</h3>
                            </div>
                            <div class="card-body text-center">
                                <h4>Harga: Rp100.000</h4>
                                <p>Deskripsi: Fitur dasar untuk startup atau bisnis kecil.</p>
                                <ul>
                                    <li>Fitur A</li>
                                    <li>Fitur B</li>
                                    <li>Fitur C</li>
                                </ul>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#" class="btn btn-dark">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection