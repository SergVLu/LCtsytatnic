@extends('admin.layouts.main')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2 mx-2">
        <div class="col-sm-6">
          <h1 class="m-0">Categories</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ '/' }}">Main-Tsytatnic</a></li>
            <li class="breadcrumb-item"><a href="{{ '/admin' }}">Adminka</a></li>
            <li class="breadcrumb-item active">Categories</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="col-md-4 ml-3">
      <a href="{{ route('admin.category.create') }}" class="btn btn-success btn-block btn-flat"><i class="fa fa-image"></i> Create Category</a>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="card-body" >
          <table id="example2" class="table table-bordered table-hover" style="width: 75%">
            <thead>
            <tr>
              <th style="width: 20px">#</th>
              <th>Category</th>
              <th>Group</th>
              <th colspan="3" class="text-center" style="width: 90px">Actions</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($categories as $category)
                <tr>
                  <td>{{ $category->id }}</td>
                  <td>{{ $category->name }}</td>
                  <td>{{ $category->group }}</td>
                  <td style="width: 30px"><a href="{{ route('admin.category.edit',$category->id ) }}" class="btn btn-outline-warning btn-block btn-sm">
                    <i class="fa fa-edit"></i></a></td>
                  <td style="width: 30px"><a href="{{ route('admin.category.show',$category->id ) }}" class="btn btn-outline-info btn-block btn-sm">
                    <i class="fa fa-eye"></i></a></td>
                  <td style="width: 30px">
                    <form action="{{ route('admin.category.delete',$category->id ) }}" method="post" >
                      @csrf
                      @method('delete')
                      <button class="btn btn-outline-danger btn-block btn-sm" onclick="return confirm('Точно удалить?')"><i class="fa fa-trash-alt" ></i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
              
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection