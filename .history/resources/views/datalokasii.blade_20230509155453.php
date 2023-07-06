@extends('layout.page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data lokasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data lokasi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data benang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ url('benang/add') }}" class="btn-sm btn-success">Tambah Data benang +</a>
                <br/><br/>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>nama benang</th>
                    <th>warna benang</th>
                    <th>ukuran</th>
                    <th>sifat bahan</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($users as $i => $benang)
                  <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $benang->nama_benang }}</td>
                    <td>{{ $benang->warnabenang }}</td>
                    <td>{{ $benang->ukuran }}</td>
                    <td>{{ $benang->sifatbahan }}</td>
                    <td>
                      <a href="{{ url('benang/edit/'.$benang->id) }}" class="btn-xs btn-primary">Edit</a>
                      <a href="{{ url('benang/delete/'.$benang->id) }}" class="btn-xs btn-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection
