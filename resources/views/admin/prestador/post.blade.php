@extends('admin.layouts.app')

@section('headSection')

<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Text Editors
      <small>Advanced form element</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Forms</a></li>
      <li class="active">Editors</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Prestadors</h3>
          </div>
          @include('includes.messages')
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{ route('prestador.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="col-lg-6">

                <div class="form-group">
                  <label for="title">Specialty</label>
                  <input type="text" class="form-control" id="especialidade" name="especialidade" placeholder=" ">
                </div>

                <div class="form-group">
                  <label for="subtitle">Name</label>
                  <input type="text" class="form-control" id="nome" name="nome" placeholder="">
                </div>

                <div class="form-group">
                  <label for="slug">Direction</label>
                  <input type="text" class="form-control" id="morada" name="morada" placeholder="">
                </div>

                <div class="form-group">
                  <label for="title">Location</label>
                  <input type="text" class="form-control" id="localidade" name="localidade" placeholder="">
                </div>

                <div class="form-group">
                  <label for="subtitle">Post code</label>
                  <input type="text" class="form-control" id="codigo_Postal" name="codigo_Postal" placeholder="">
                </div>

                <div class="form-group">
                  <label for="slug">State</label>
                  <input type="text" class="form-control" id="concelho" name="concelho" placeholder="">
                </div>

                <div class="form-group">
                  <label for="title">District</label>
                  <input type="text" class="form-control" id="distrito" name="distrito" placeholder="">
                </div>

                <div class="form-group">
                  <label for="subtitle">Telephone</label>
                  <input type="text" class="form-control" id="telefone" name="telefone" placeholder="">
                </div>

                <div class="form-group">
                  <label for="slug">E-mail</label>
                  <input type="text" class="form-control" id="e-mail" name="e-mail" placeholder=" ">
                </div>

                <div class="form-group">
                  <label for="slug">Notas</label>
                  <input type="text" class="form-control" id="notas" name="notas" placeholder="">
                </div>

                
              </div>
              <div class="col-lg-6">
               <br>
                          
                              
             </div>
            </div>
            <!-- /.box-body -->
            

             <div class="box-footer">
              <input type="submit" class="btn btn-primary">
              <a href='{{ route('prestador.index') }}' class="btn btn-warning">Back</a>
            </div>
          </form>
        </div>
        <!-- /.box -->

        
      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('footerSection')
<script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{  asset('admin/ckeditor/ckeditor.js') }}"></script>
<script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
    });
</script>
<script>
  $(document).ready(function() {
    $(".select2").select2();
  });
</script>
@endsection