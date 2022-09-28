@extends('backend.layouts.app')

@section('title', 'Admin | Category')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Category</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
         
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Category <small>add new category</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- {{ $errors }} -->
              
              <form id="quickForm" action="{{ route('updatecate', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="cat_name">Name</label>
                    <input type="text" name="cat_name" class="form-control" id="cat_name" value="{{ $data->en_name }}" placeholder="Enter category name">
                    <span class="text-danger">@error('cat_name') {{ $message }} @enderror</span>
                  </div>
                  <div class="form-group">
                    <label for="cat_name_bangla">Name(Bangla)</label>
                    <input type="text" name="cat_name_bangla" class="form-control" id="cat_name_bangla" value="{{ $data->bn_name }}" placeholder="Enter category bangla name">
                    <span class="text-danger">@error('cat_name_bangla') {{ $message }} @enderror</span>
                  </div>
                  <div class="form-group">
                    <label for="cat_image">Image</label>
                    @if($data->cat_img_name !='')
                      <img src="{{ asset('images/'.$data->cat_img_name) }}" width="80" height="60" alt="no image">
                    @endif
                    <input type="file" name="cat_image" class="form-control" id="cat_image">
                    <span class="text-danger">@error('cat_image') {{ $message }} @enderror</span>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          
           
       
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection