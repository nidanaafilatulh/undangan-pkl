@extends('template.main')
@section('title', 'Referral')
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
                <label for="referral">Generate Referral</label>
            </div>
            
            <form class="needs-validation" novalidate action="/barang" method="POST">
              @csrf
              <div class="card-body">
                  <!-- Contoh Field Form -->
                  <div class="form-group">
                    <input type="text" name="referral" class="form-control @error('referral') is-invalid @enderror" id="referral" placeholder="VoucherNida" value="{{old('referral')}}" required>
                    @error('referral')
                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                    @enderror
                  </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-success" type="submit">Generate</button>
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