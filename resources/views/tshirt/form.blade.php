@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ empty($result) ? 'Tambah' : 'Edit' }} Data Tshirt
        <small>Tshirt Store Mantul</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Tshirt</li>
        <li class="active">{{ empty($result) ? 'Tambah' : 'Edit' }} Data Tshirt</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @include('templates/feedback')

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('/') }}" class="btn bg-purple"><i class="fa fa-chevron-left"></i> Kembali</a>
		</div>
        <div class="box-body">
          <form action="{{ empty($result) ? url('tshirt/add') : url("tshirt/$result->id_tshirt/edit") }}" class="form-horizontal" method="POST">
          		{{  csrf_field() }}

              @if (!empty($result))
                {{ method_field('patch') }}
              @endif
          <div class="form-group">
          		<label class="control-label col-sm-2">Nama Tshirt</label>
          		<div class="col-sm-10">
          			<input type="text" name="nama_tshirt" class="form-control" placeholder="Masukan Nama Tshirt" />
          		</div>
          </div>

          <div class="form-group">
          	<label class="control-label col-sm-2">Type</label>
          		<div class="col-sm-10">
          			<input type="text" name="type" class="form-control" placeholder="Masukan Type Tshirt" />
          		</div>
          </div>

          <div class="form-group">
          	<label class="control-label col-sm-2">Warna</label>
          		<div class="col-sm-10">
          			<input type="text" name="warna_produk" class="form-control" placeholder="Masukan Warna" />
          		</div>
          </div>

          <div class="form-group">
          	<label class="control-label col-sm-2">Ukuran</label>
          		<div class="col-sm-10">
          			<input type="text" name="ukuran" class="form-control" placeholder="Masukan Ukuran" />
          		</div>
          </div>

          <div class="form-group">
          	<label class="control-label col-sm-2">Stock</label>
          		<div class="col-sm-10">
          			<input type="text" name="stock" class="form-control" placeholder="Masukan Stock" />
          		</div>
          </div>

          <div class="form-group">
          	<label class="control-label col-sm-2">Harga</label>
          		<div class="col-sm-10">
          			<input type="text" name="harga" class="form-control" placeholder="Masukan Harga" />
          		</div>
          </div>

          <div class="form-group">
          	<div cLass="col-sm-10 col-sm-offset-2">
          		<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
          	</div>
          </div>
      </form>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box-->
    </section>
    <!-- /.content -->
@endsection