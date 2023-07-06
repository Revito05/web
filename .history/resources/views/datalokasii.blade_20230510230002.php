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
                <h3 class="card-title">Data lokasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ url('lokasii/add') }}" class="btn-sm btn-success">Tambah Data lokasi +</a>
                <br/><br/>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>Lokasi Alternatif</th>
                    <th>kriteria</th>
                    <th>bobot</th>
                    <th>jenis</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($users as $i => $lokasii)
                  <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $lokasii->lokasialternatif }}</td>
                    <td>{{ $lokasii->kriteria }}</td>
                    <td>{{ $lokasii->bobot }}</td>
                    <td>{{ $lokasii->jenis }}</td>
                    <td>
                      <a href="{{ url('lokasii/edit/'.$lokasii->id) }}" class="btn-xs btn-primary">Edit</a>
                      <a href="{{ url('lokasii/delete/'.$lokasii->id) }}" class="btn-xs btn-danger">Delete</a>
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
