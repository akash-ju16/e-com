@extends('backend.layouts.app')

@section('title', 'Admin | SubCategory')

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
              <li class="breadcrumb-item active">Sub-Category</li>
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
                <h3 class="card-title">Sub-Category <small>add new sub-category</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{ route('updatesubcat', $data->id) }}" method="post">
              @csrf  
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label>Select Main Category</label>
                  <select name="mcategory" id="mcategory" class="form-control select2" style="width: 100%;">
                    <option value="">Select</option>
                    @foreach($mdata as $item)
                      <option value="{{ $item->id }}" {{ ( $item->id == $data->categorie_id ) ? 'selected' : '' }}>{{ $item->en_name }}</option>
                    @endforeach
                  </select>
                  <span class="text-danger">@error('mcategory') {{ $message }} @enderror</span>
                </div>

                  <div class="form-group">
                    <label for="sub_cat_name">Sub Category Name</label>
                    <input type="text" name="sub_cat_name" class="form-control" id="sub_cat_name" value="{{ $data->en_name }}">
                    <span class="text-danger">@error('sub_cat_name') {{ $message }} @enderror</span>
                  </div>
                  
                  <div class="form-group">
                    <label for="sub_cat_name_bangla">Sub Category Name(Bangla)</label>
                    <input type="text" name="sub_cat_name_bangla" class="form-control" id="sub_cat_name_bangla" value="{{ $data->bn_name }}">
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