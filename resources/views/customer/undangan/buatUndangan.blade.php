@extends('template.customerTemplate')
@section('title', 'Buat Undangan')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">@yield('title')</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">@yield('title')</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="text-right">
                <a href="{{ Route('undangan') }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-arrow-rotate-left"></i>
                Back
                </a>
              </div>
            </div>
            <form class="needs-validation" novalidate action="/buatUndangan" method="POST">
              @csrf
              <div class="card-body">
                  <div>
                    <h5 for="dataUndangan"><b>INFO DASAR & TAMPILAN</b></h5>
                  </div>
                  <!-- Contoh Field Form -->
                  <h6 for="nama_acara">Nama Acara</h6>
                  <div class="form-group">
                    <input type="text" name="namaAcara" class="form-control @error('namaAcara') is-invalid @enderror" id="namaAcara" placeholder="Pernikahan Erie dan Angga" value="{{old('namaAcara')}}" required>
                    @error('namaAcara')
                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <h6 for="link_undangan">Link Undangan</h6>
                  <div class="form-group">
                    <input type="text" name="linkUndangan" class="form-control @error('linkUndangan') is-invalid @enderror" id="linkUndangan" placeholder="Pernikahan Erie dan Angga" value="{{old('linkUndangan')}}" required>
                    @error('linkUndangan')
                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div>
                    <h5 for="dataMempelaiPria"><b>DATA MEMPELAI PRIA</b></h5>
                  </div>
                  <h6 for="nama_mempelai_pria">Nama Mempelai Pria</h6>
                  <div class="form-group">
                    <input type="text" name="namaPria" class="form-control @error('namaPria') is-invalid @enderror" id="namaPria" placeholder="Pernikahan Erie dan Angga" value="{{old('namaPria')}}" required>
                    @error('namaPria')
                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <h6 for="nama_mempelai_pria">Nama Panggilan Mempelai Pria</h6>
                  <div class="form-group">
                    <input type="text" name="namaPanggilanPria" class="form-control @error('namaPanggilanPria') is-invalid @enderror" id="namaPanggilanPria" placeholder="Pernikahan Erie dan Angga" value="{{old('namaPanggilanPria')}}" required>
                    @error('namaPanggilanPria')
                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <h6 for="nama_ibu_mempelai_pria">Nama Ibu Mempelai Pria</h6>
                  <div class="form-group">
                    <input type="text" name="namaIbuPria" class="form-control @error('namaIbuPria') is-invalid @enderror" id="namaIbuPria" placeholder="Nama Ibu" value="{{old('namaIbuPria')}}" required>
                    @error('namaIbuPria')
                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <h6 for="nama_ayah_mempelai_pria">Nama Ayah Mempelai Pria</h6>
                  <div class="form-group">
                    <input type="text" name="namaAyahPria" class="form-control @error('namaAyahPria') is-invalid @enderror" id="namaAyahPria" placeholder="Nama Bapak" value="{{old('namaAyahPria')}}" required>
                    @error('namaAyahPria')
                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div>
                    <h5 for="dataUndangan"><b>DATA MEMPELAI WANITA</b></h5>
                  </div>
                  <h6 for="dataUndangan">Nama Mempelai Wanita</h6>
                  <div class="form-group">
                    <input type="text" name="namaAcara" class="form-control @error('namaAcara') is-invalid @enderror" id="namaAcara" placeholder="Pernikahan Erie dan Angga" value="{{old('namaAcara')}}" required>
                    @error('namaAcara')
                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <h6 for="nama_ibu_mempelai_wanita">Nama Ibu Mempelai Wanita</h6>
                  <div class="form-group">
                    <input type="text" name="namaIbuWanita" class="form-control @error('namaIbuWanita') is-invalid @enderror" id="namaIbuWanita" placeholder="Pernikahan Erie dan Angga" value="{{old('namaIbuWanita')}}" required>
                    @error('namaIbuWanita')
                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <h6 for="nama_ayah_mempelai_pria">Nama Ayah Mempelai Wanita</h6>
                  <div class="form-group">
                    <input type="text" name="namaAyahWanita" class="form-control @error('namaAyahWanita') is-invalid @enderror" id="namaAyahWanita" placeholder="Pernikahan Erie dan Angga" value="{{old('namaAyahWanita')}}" required>
                    @error('namaAyahWanita')
                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div>
                    <h5><b>DATA ACARA AKAD NIKAH</b></h5>
                  </div>
                  <h6 for="dataUndangan">Alamat Akad</h6>
                  <div class="form-group">
                    <input type="text" name="alamatAkad" class="form-control @error('alamatAkad') is-invalid @enderror" id="alamatAkad" placeholder="Gedung Prof Sudarto" value="{{old('alamatAkad')}}" required>
                    @error('alamatAkad')
                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <h6>Pilih Tanggal Akad</h6>
                  <input type="date" class="form-control" id="tanggalAkad" name="tanggalAkad">
                  <div class="mt-2">
                    <h5><b>DATA ACARA RESEPSI PERNIKAHAN</b></h5>
                  </div>
                  <h6 for="dataUndangan">Alamat Resepsi</h6>
                  <div class="form-group">
                    <input type="text" name="alamatResepsi" class="form-control @error('alamatResepsi') is-invalid @enderror" id="alamatResepsi" placeholder="Gedung Prof Sudarto" value="{{old('alamatResepsi')}}" required>
                    @error('alamatResepsi')
                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <h6 for="tanggal_resepsi">Pilih Tanggal Resepsi</h6>
                  <input type="date" class="form-control" id="tanggalResepsi" name="tanggalResepsi">
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-dark mr-1" type="reset"><i class="fa-solid fa-arrows-rotate"></i>
                  Reset</button>
                <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i>
                  Save</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.content -->
      </div>
    </div>
  </div>
</div>

@endsection