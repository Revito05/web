@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data namanamabenang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data namanamabenang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Data nama benang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/lokasii/update/'.$lokasii->id) }}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_namabenang" class="col-sm-2 col-form-label">Nama namabenang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_benang" placeholder="Nama namabenang" value="{{ $benang->nama_benang}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="warnabenang" class="col-sm-2 col-form-label">warna benang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="warnabenang" placeholder="warna benang" value="{{ $benang->warnabenang}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ukuran" class="col-sm-2 col-form-label">ukuran</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="ukuran" placeholder="ukuran" value="{{ $benang->ukuran}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="sifatbahan" class="col-sm-2 col-form-label">sifat bahan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="sifatbahan" placeholder="sifat bahan" value="{{ $benang->sifatbahan}}">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Simpan</button>
                  <button type="submit" class="btn btn-default float-right">Clear</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection
