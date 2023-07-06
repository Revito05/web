@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Jenis Benang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Jenis Benang</li>
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
                <h3 class="card-title">Add Jenis Benang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/benang/store')}}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_benang" class="col-sm-2 col-form-label">Nama Jenis Benang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_benang" placeholder="Nama Jenis Benang">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="warnabenang" class="col-sm-2 col-form-label">Warna Benang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="warnabenang" placeholder="Warna Benang">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ukuran" class="col-sm-2 col-form-label">Ukuran Benang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="ukuran" placeholder="Ukuran Benang">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="sifatbahan" class="col-sm-2 col-form-label">Sifat Benang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="sifatbahan" placeholder="Sifat Benang">
                    </div>
                  </div>
                  <!-- <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                    </div>
                  </div> -->
                  <!-- <div class="form-group row">
                    <label for="tinggi_badan" class="col-sm-2 col-form-label">Tinggi Badan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tinggi_badan" placeholder="Tinggi Badan">
                    </div>
                  </div> -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Create</button>
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