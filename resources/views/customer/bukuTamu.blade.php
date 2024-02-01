@extends('template.customertemplate')
@section('title', 'Buku Tamu')
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
                    <div>
                        <a href="#" class="btn btn-info mx-1 ms-1" >Export</a>
                    </div>
                    <div>
                        <a href="#" class="btn btn-info mx-1">Import</a>
                    </div>
                    <div>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambahTamuModal">
                            Tambah
                        </button>
                        <div class="modal fade" id="tambahTamuModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLabel">Tambah Tamu Undangan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                        <div class="form-group">
                                            <label for="nama-tamu">Nama</label>
                                            <input type="text" class="form-control" id="nama-tamu">
                                        </div>
                                        <div class="form-group">
                                            <label for="nomor-tamu">Nomor</label>
                                            <input type="text" class="form-control" id="nomor-tamu">
                                        </div>
                                        <div class="form-group">
                                            <label for="whatsapp-tamu">WhatsApp</label>
                                            <input type="text" class="form-control" id="whatsapp-tamu">
                                        </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Tamu Undangan</h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover text-center" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Nama</th>
                                            <th>Nomor WhatsApp</th>
                                            <th>Ucapan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
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