@extends('layout.page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data alternatif</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data alternatif</li>
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
                <h3 class="card-title">Data alternatif</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ url('alternatif/add') }}" class="btn-sm btn-success">Tambah Data alternatif +</a>
                <br/><br/>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>kode_alternatif</th>
                    <th>kriteria_1</th>
                    <th>kriteria_2</th>
                    <th>kriteria_3</th>
                    <th>kriteria_4</th>
                    <th>kriteria_5</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($users as $i => $alternatif)
                  <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $alternatif->kode_alternatif }}</td>
                    <td>{{ $alternatif->kriteria_1 }}</td>
                    <td>{{ $alternatif->kriteria_2 }}</td>
                    <td>{{ $alternatif->kriteria_3 }}</td>
                    <td>{{ $alternatif->kriteria_4 }}</td>
                    <td>{{ $alternatif->kriteria_5 }}</td>
                    <td>
                      <a href="{{ url('alternatif/edit/'.$alternatif->id) }}" class="btn-xs btn-primary">Edit</a>
                      <a href="{{ url('alternatif/delete/'.$alternatif->id) }}" class="btn-xs btn-danger">Delete</a>
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
