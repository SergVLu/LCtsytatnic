@extends('admin.layouts.main')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2 mx-2">
        <div class="col-sm-6">
          <h1 class="m-0">Create Category</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ '/' }}">Main-Tsytatnic</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Adminka</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.category') }}">Categories</a></li>
            <li class="breadcrumb-item active">Create Category</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid w-50" >
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">new Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ route('admin.category.store') }}" method="post">
          @csrf
          <div class="card-body">
            <div class="form-group row" data-select2-id="43">

            </div>
            <!-- /.form-group -->
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Group</label>
              <div class="col-sm-10">
                <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="group_id">
                  @foreach ($groups as $group)
                    <option {{ $group->id === 1 ? "selected" : '' }} value="{{ $group->id }}">{{ $group->name }}</option>
                  @endforeach
                </select>
              </div>
              @error('group_id')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Category name" name="name">
              </div>
              @error('name')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Save it</button>
            <a href="{{ route('admin.category') }}" class="btn btn-default float-right">Cancel</a>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection