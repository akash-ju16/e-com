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
                    <li class="breadcrumb-item active">Product</li>
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
      
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Details</h3>
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
                    <tr>
                    
                    </tr>
                  
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