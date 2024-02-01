@extends('template.customertemplate')
@section('title', 'Buku Undangan')
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
                                <h3 class="card-title">Undangan 1</h3>
                            </div>
                            <div class="card-body text-center">
                                <img alt="Love Beach Wedding Invitation" src="https://jasaundangan.com/assets/images/product/1657766034782.JPG" class="card-img-top">
                            </div>
                            <div class="card-footer text-center">
                                <a href="#" class="btn btn-warning btn-block mx-1">Buku Tamu</a>
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
                                <a href="{{ Route('bukuTamu') }}" class="btn btn-warning btn-block mx-1 ">Buku Tamu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection