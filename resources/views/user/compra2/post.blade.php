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
            <h3 class="box-title">Titles</h3>
          </div>
          @include('includes.messages')
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{ route('compra.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="col-lg-6">

                <div class="form-group">             
                  <label for="title">E-mail</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="">
                </div>

                <div class="form-group">
                  <label for="subtitle">Name user</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="">
                </div>

                <div class="form-group">
                  <label for="subtitle">Nif</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="">
                </div>

                <div class="form-group">
                  <label for="slug">Prestador</label>
                  <input type="text" class="form-control" id="name_prestador" name="name_prestador" placeholder="">
                </div>

                <div class="form-group">             
                  <label for="title">Ticket</label>
                  <input type="text" class="form-control" id="cartao" name="cartao" placeholder=" ">
                </div>


              </div>
              <div class="col-lg-6">
                            <br>
                              <div class="form-group">
                                <div class="pull-right">
                                  <label for="image">File input</label>
                                  <input type="file" name="image" id="image">
                                </div>      
                              <br>              
                            </div>
            </div>

            <div class="col-lg-6">
               <br>
                          
                              
             </div>
            </div>
            <!-- /.box-body -->
            

             <div class="box-footer">
              <input type="submit" class="btn btn-primary">
              <a href='{{ route('compra.index') }}' class="btn btn-warning">Back</a>
            </div>
          </form>
        </div>
            <!-- /.box-body -->
            
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