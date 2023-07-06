@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add mobil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add mobil</li>
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
                <h3 class="card-title">Add mobil</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/mobil/store')}}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="merk" class="col-sm-2 col-form-label">Merk Mobil</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="merk" placeholder="merk">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nopol" class="col-sm-2 col-form-label">Nopol</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nopol" placeholder="nopol">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="warna" class="col-sm-2 col-form-label">Warna</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="warna" placeholder="warna">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tujuan" class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tujuan" placeholder="tujuan">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tanggal" placeholder="tanggal">
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
