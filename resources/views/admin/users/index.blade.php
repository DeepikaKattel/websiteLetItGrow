@extends('admin.master')
@section('content')
<div class="wrapper">
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Users</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Users</li>
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
                  <h3 class="card-title">Table showing registered users</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>User name</th>
                      <th>Email</th>
                      <th>Comapny Name</th>
                      <th>Designation</th>
                      <th>Company Type</th>
                      <th>Registered at</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->company_name }}</td>
                            <td>{{ $user->designation }}</td>
                            <td>{{ $user->company_type }}</td>
                            <td>{{ $user->created_at }}</td>
                           <td id="none">
                              <a href="{{route('users.edit',$user->id)}}"><i class="fa fa-lg fa-edit"></i></a>
                              @method('DELETE')
                              <a onclick="return confirm('Do you want to delete')" href="{{route('u.destroy',$user->id)}}"><i class="fa fa-lg fa-minus-circle" style="color:red"></i></a>
                           </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>User name</th>
                      <th>Email</th>
                      <th>Comapny Name</th>
                      <th>Designation</th>
                      <th>Company Type</th>
                      <th>Registered at</th>
                      <th>Action</th>
                    </tr>
                    </tfoot>
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
  </div>
 @endsection


