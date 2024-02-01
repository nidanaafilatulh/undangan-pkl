@extends('template.customertemplate')

@section('title', 'Buat Undangan')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahTamuModal">
                Tambah Tamu
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
</div>

@endsection