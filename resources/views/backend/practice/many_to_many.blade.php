@extends('backend.layouts.app')

@section('title', 'Admin | Practice')

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
                    <li class="breadcrumb-item active">Practice</li>
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
                        <th>#</th>
                        <th>NAME</th>
                        <th>IMAGE</th>
                        <th>STATUS</th>
                        <th>PRICE</th>
                        <th>STOCK</th>
                        <!-- <th>Category Name</th> -->
                        <!-- <th>Image</th> -->
                        <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                  {{--
                  @foreach ($productlist as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td><a href="{{ url('product/view/'.$product->id) }}">{{ $product->prod_name }}</a></td>
                        <td> <img src="{{ asset('images/products/'.$product->product_image) }}" width="100" height="100" alt="no image"></td>
                        <td>Active</td>
                        <!-- <td>{!! $product->prod_description !!}</td> -->
                        <td>{{ $product->prod_price }}Tk</td>
                        <td>{{ $product->prod_stock }}</td>
                        <!-- <td>{{ $product->categories_id }}</td> -->
                        
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ url('product/edit/'.$product->id) }}"><i class="fas fa-pencil-alt"></i>Edit</a>
                            <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i>Delete</a>
                        </td>
                    </tr>
                  @endforeach
                  --}}
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