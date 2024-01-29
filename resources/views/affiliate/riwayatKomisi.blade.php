@extends('template.affiliateTemplate')
@section('title', 'Riwayat Komisi Affiliate')
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
                                <h3 class="card-title">Tabel Riwayat Komisi</h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover text-center" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Nama Customer</th>
                                            <th>Tanggal</th>
                                            <th>Jenis Paket</th>
                                            <th>Total Komisi</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- ganti yang di backend --}}
                                        {{-- @foreach ($pemasukan as $index => $data)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $data->nama }}</td>
                                                <td>{{ $data->tanggal }}</td>
                                                <td>Rp {{ number_format($data->jumlah, 2) }}</td>
                                                <td>{{ $data->status }}</td>
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection