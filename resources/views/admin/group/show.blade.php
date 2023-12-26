@extends('admin.layouts.main')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2 mx-2">
        <div class="col-sm-6">
          <h1 class="m-0">Show Group</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ '/' }}">Main-Tsytatnic</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Adminka</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.group') }}">Groups</a></li>
            <li class="breadcrumb-item active">Show Group</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid w-50" >
      <div class="card card-primary disabled">
        <div class="card-header">
          <h3 class="card-title">show Group</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" >
          <input type="hidden"  name="id" value="{{ $group->id }}">
          <div class="card-body">
            <!-- /.form-group -->
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Group name" name="name" value="{{ $group->name }}" disabled="">
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <a href="{{ route('admin.group.edit',$group->id) }}" class="btn btn-warning float-left">Edit Group</a>
            <a href="{{ route('admin.group') }}" class="btn btn-default float-right">Cancel</a>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection