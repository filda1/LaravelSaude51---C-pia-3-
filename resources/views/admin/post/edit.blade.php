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
            <h3 class="box-title">Image</h3>
          </div>
          @include('includes.messages')
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="box-body">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="title">Image title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $post->title }}">
                </div>

                <div class="form-group">
                  <label for="subtitle"></label>
                  
                </div>

                <div class="form-group">
                  <label for="slug"></label>
                </div>
                
              </div>
              <div class="col-lg-6">
                <br>
                <div class="form-group">
                  <div class="pull-right">
                    <label for="image">File input</label>
                    <input type="file" name="image" id="image">
                  </div>
                  <div class="checkbox pull-left">
                    <label>
                                  
                    </label>
                  </div>
                </div>
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
              <a href='{{ route('post.index') }}' class="btn btn-warning">Back</a>
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