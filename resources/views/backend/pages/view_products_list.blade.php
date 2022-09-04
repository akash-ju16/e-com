@extends('backend.layouts.app')

@section('title', 'Admin | Products')

@section('content')

<!-- Contains page -->
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
    </div><!-- /.content-header -->


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        <div class="row">
          
            <div class="col-12">
                <span class="text-success">
                @if(session()->has('product-status')) {{ session('product-status') }}  @endif
                </span>
      
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Category Name</th>
                        <th>Sub Category Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($productlist as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->prod_name }}</td>
                        <td>{{ $product->prod_description }}</td>
                        <td>{{ $product->prod_price }}</td>
                        <td>{{ $product->prod_stock }}</td>
                        <td>{{ $product->categories_id }}</td>
                        <td>{{ $product->subcategories_id }}</td>
                        <td>
                            <img src="{{ asset('images/products/'.$product->product_image) }}" width="40" height="30" alt="no image"></td>
                        <td>
                        <span class="text-danger">edit</span>
                        <span class="text-danger"> | Delete</span>
                        </td>
                    </tr>
                  @endforeach
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
       
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section> <!-- /.end section -->


  </div> <!-- /.content-page -->

@endsection