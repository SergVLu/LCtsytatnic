@extends('admin.layouts.main')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2 mx-2">
        <div class="col-sm-6">
          <h1 class="m-0">Create Group</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ '/' }}">Main-Tsytatnic</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Adminka</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.group') }}">Groups</a></li>
            <li class="breadcrumb-item active">Create Group</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid w-50" >
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">new Group</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ route('admin.group.store') }}" method="post">
          @csrf
          <div class="card-body">
            <!-- /.form-group -->
            <div class="form-group row">
              <label for="Group" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Group name" name="name" value="{{ old('name') }}">
              </div>
              @error('name')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Save it</button>
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