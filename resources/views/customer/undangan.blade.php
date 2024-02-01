@extends('template.customertemplate')
@section('title', 'Buat Undangan')
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
                <div class="row mb-3">
                    <div class="col-12">
                        <a href="{{ Route('buatUndangan') }}" class="btn btn-success">Buat Undangan</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-warning">
                            <div class="card-header text-center">
                                <h3 class="card-title">Undangan 1</h3>
                            </div>
                            <div class="card-body text-center">
                                <img alt="Love Beach Wedding Invitation" src="https://jasaundangan.com/assets/images/product/1657766034782.JPG" class="card-img-top">
                            </div>
                            <div class="card-footer text-center">
                                <div class="row text-center">
                                    <div class="center">
                                        <a href="#" class="btn btn-warning mx-1">Preview</a>
                                        <a href="#" class="btn btn-warning mx-1">Edit Undangan</a>
                                        <a href="{{ Route('buktiPembayaran') }}" class="btn btn-warning mx-1">Aktifkan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-warning">
                            <div class="card-header text-center">
                                <h3 class="card-title">Undangan 2</h3>
                            </div>
                            <div class="card-body text-center">
                                <img alt="Love Beach Wedding Invitation" src="https://jasaundangan.com/assets/images/product/1657766034782.JPG" class="card-img-top">
                            </div>
                            <div class="card-footer text-center">
                                <div class="row text-center">
                                    <div class="center">
                                        <a href="#" class="btn btn-warning mx-1">Preview</a>
                                        <a href="#" class="btn btn-warning mx-1">Edit Undangan</a>
                                        <a href="{{ Route('buktiPembayaran') }}" class="btn btn-warning mx-1">Aktifkan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-warning">
                            <div class="card-header text-center">
                                <h3 class="card-title">Undangan 3</h3>
                            </div>
                            <div class="card-body text-center">
                                <img alt="Love Beach Wedding Invitation" src="https://jasaundangan.com/assets/images/product/1657766034782.JPG" class="card-img-top">
                            </div>
                            <div class="card-footer text-center">
                                <div class="row text-center">
                                    <div class="center">
                                        <a href="#" class="btn btn-warning mx-1">Preview</a>
                                        <a href="#" class="btn btn-warning mx-1">Edit Undangan</a>
                                        <a href="{{ Route('buktiPembayaran') }}" class="btn btn-warning mx-1">Aktifkan</a>
                                    </div>
                                </div>
                            </div>
                        </div>            
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
