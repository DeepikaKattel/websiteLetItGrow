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
            <h1>Products Features Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products Features Form</li>
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
                <h3 class="card-title">Products Features</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('adminProductsFeatures.store')}}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="services">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                  </div>

                  <div class="form-group">
                    <label for="services"> Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
                  </div>
                    <div class="form-group">
                        <label for="dept_id">Product:</label>
                        <select class="form-control" name="product_id">
                            @foreach ($productsNames as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
{{--<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>--}}
{{--<script>--}}
{{--    tinymce.init({--}}
{{--        selector:'textarea.form-control',--}}
{{--        width: 440,--}}
{{--        height: 300--}}
{{--    });--}}
{{--</script>--}}
 @endsection

