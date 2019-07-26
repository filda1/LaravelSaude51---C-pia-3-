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
          <form role="form" action="{{ route('prestador.update',$category->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="box-body">
              <div class="col-lg-6">

                <div class="form-group">
                  <label for="Title">specialty</label>
                  <input type="text" class="form-control" id="especialidade" name="especialidade" placeholder="" value="{{ $category->especialidade }}">
                </div>

                <div class="form-group">
                  <label for="subtitle">Name</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="nome" value="{{ $category->nome}}">
                </div>

                <div class="form-group">
                  <label for="subtitle">State</label>
                <input type="text" class="form-control" id="morada" name="morada" placeholder="" value="{{ $category->morada}}">
                </div>

                <div class="form-group">
                  <label for="subtitle">Location</label>
                <input type="text" class="form-control" id="nome" name="localidade" placeholder="localidade" value="{{ $category->localidade}}">
                </div>

                <div class="form-group">
                  <label for="subtitle">Post code</label>
                <input type="text" class="form-control" id="codigo_Postal" name="codigo_Postal" placeholder="" value="{{ $category->codigo_Postal}}">
                </div>

                <div class="form-group">
                  <label for="subtitle">Council</label>
                <input type="text" class="form-control" id="concelho" name="concelho" placeholder="" value="{{ $category->concelho}}">
                </div>

                <div class="form-group">
                  <label for="subtitle">District</label>
                <input type="text" class="form-control" id="distrito" name="distrito" placeholder="" value="{{ $category->distrito}}">
                </div>

                <div class="form-group">
                  <label for="subtitle">telephone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="" value="{{ $category->telefone}}">
                </div>

                <div class="form-group">
                  <label for="subtitle">E-mail</label>
                <input type="text" class="form-control" id="e_mail" name="e_mail" placeholder="" value="{{ $category->e_mail}}">
                </div>

                <div class="form-group">
                  <label for="subtitle">Notas</label>
                <input type="text" class="form-control" id="notas" name="notas" placeholder="" value="{{ $category->notas}}">
                </div>
         
                
              </div>
              <div class="col-lg-6">
                <br>
                
                <br>
                <div class="form-group" style="margin-top:18px;">
                   
                </div>
                <div class="form-group" style="margin-top:18px;">            
                </div>               
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
      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
    });
</script>
<script>
  $(document).ready(function() {
    $(".select2").select2();
  });
</script>
@endsection