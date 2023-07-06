@extends('layout.page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data mobil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data mobil</li>
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
                <h3 class="card-title">Data mobil</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ url('mobil/add') }}" class="btn-sm btn-success">Tambah Data mobil +</a>
                <br/><br/>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>Merk</th>
                    <th>Nopol</th>
                    <th>Tujuan</th>
                    <th>Tanggal</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($users as $i => $mobil)
                  <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $mobil->merk }}</td>
                    <td>{{ $mobil->nopol }}</td>
                    <td>{{ $mobil->tujuan }}</td>
                    <td>{{ $mobil->tanggal }}</td>
                    <td>
                      <a href="{{ url('mobil/edit/'.$mobil->id) }}" class="btn-xs btn-primary">Edit</a>
                      <a href="{{ url('mobil/delete/'.$mobil->id) }}" class="btn-xs btn-danger">Delete</a>
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
