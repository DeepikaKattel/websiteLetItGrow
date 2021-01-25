@extends('admin.master')
@section('content')
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Services Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Services Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Services</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('adminServices.update',$services->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PATCH')
              <div class="card-body">
                  <div class="form-group">
                    <label for="services">Heading</label>
                    <input type="text" class="form-control" id="heading" name="heading" placeholder="Enter heading" value="{{old('heading', $services->heading)}}">
                  </div>
                  
                  <div class="form-group">
                    <label for="services"> Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Description">{{old('description', $services->description)}}</textarea>
                  </div>                
                  <div class="form-group">
                      <label>Image</label>
                      <input type="file" name="image" id="image" class="form-control" required>
                  </div>
                
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->       </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
    tinymce.init({
        selector:'textarea.form-control',
        width: 440,
        height: 300
    });
</script>
 @endsection

