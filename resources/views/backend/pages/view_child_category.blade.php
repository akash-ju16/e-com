@extends('backend.layouts.app')

@section('title', 'Admin | ChildCategory')

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
              <li class="breadcrumb-item active">Child-Category</li>
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
          <span class="text-success">
              @if(session()->has('status'))
              {{ session('status') }}
              @endif
            </span>
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Child-Category <small>add new child-category</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{ route('childcatepost') }}" method="post">
              @csrf  
                  <div id="app"></div>
                  <div class="form-group">
                    <label for="child_cat_name">Child Category Name</label>
                    <input type="text" name="child_cat_name" class="form-control" id="child_cat_name" value="{{old('child_cat_name')}}" placeholder="Enter child category name">
                    <span class="text-danger">@error('child_cat_name') {{ $message }} @enderror</span>
                  </div>
                  
                  <div class="form-group">
                    <label for="child_cat_name_bangla">Child Category Name(Bangla)</label>
                    <input type="text" name="child_cat_name_bangla" class="form-control" id="child_cat_name_bangla" value="{{old('child_cat_name_bangla')}}" placeholder="Enter child category bangla name">
                   </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          
            <div class="col-12">
      
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Child Category List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SL No</th>
                    <th>Main Category Name</th>
                    <th>Sub Category Name</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                   
                  
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
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

@push('custom-page-script')
<script src="{{ mix('js/app.js') }}"></script>
@endpush