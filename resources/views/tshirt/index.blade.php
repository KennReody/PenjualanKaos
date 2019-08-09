@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tshirt
        <small>Tshirt Store Mantul</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href=" {{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Tshirt</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      @include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('tshirt/add') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i>Tambah</a>
        </div>

        <div class="box-body">
          <table class="table table-stripped">
            <thead>
                <tr>
                    <th>ID Tshirt</th>
                    <th>Nama Tshirt</th>
                    <th>Type</th>
                    <th>Warna Produk</th>
                    <th>Ukuran</th>
                    <th>Stock</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($result as $row)
                <tr>
                    <td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
                    <td>{{ $row->nama_tshirt }}</td>
                    <td>{{ $row->type }}</td>
                    <td>{{ $row->warna_produk }}</td>
                    <td>{{ $row->ukuran }}</td>
                    <td>{{ $row->stock }}</td>
                    <td>{{ $row->harga }}</td>
                    <td>
                        <a href="{{ url("tshirt/$row->id_tshirt/edit") }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                        <form action="{{ url("tshirt/$row->id_tshirt/delete") }}" 
                            method="POST" style="display:inline;">
                            {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </from>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box-footer -->
        </div>
        <!-- /.box-->

    </section>
    <!-- /.content -->
@endsection