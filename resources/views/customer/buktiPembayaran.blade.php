@extends('template.customertemplate')

@section('title', 'Pembayaran')

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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Pembayaran</h3>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-info" role="alert">
                                <h4 class="alert-heading">Informasi Transfer Manual</h4>
                                <p>Silahkan melakukan pembayaran melalui transfer bank dan unggah bukti transfer di form ini.</p>
                                <hr>
                                <p class="mb-0">Pastikan Anda mengisi data dengan benar untuk memudahkan verifikasi pembayaran.</p>
                            </div>
                            <form method="post" action="{{ url('path-to-your-post-route') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama:</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="norek">Nomor Rekening:</label>
                                    <input type="text" class="form-control" id="norek" name="norek" required>
                                </div>
                                <div class="form-group">
                                    <label for="buktiBayar">Bukti Pembayaran:</label>
                                    <input type="file" class="form-control-file" id="buktiBayar" name="buktiBayar" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection