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
              <li class="breadcrumb-item active">Product</li>
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
            <!-- jquery validation -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="prod_name">Name</label>
                    <input type="text" name="prod_name" class="form-control" id="prod_name" placeholder="Enter product name">
                  </div>
                  <div class="form-group">
                    <label for="prod_name_bangla">Name(Bangla)</label>
                    <input type="text" name="prod_name_bangla" class="form-control" id="prod_name_bangla" placeholder="Enter product name bangla">
                  </div>
                  <div class="form-group">
                    <label for="prod_description">Description</label>
                    <input type="text" name="prod_description" class="form-control" id="prod_description" placeholder="Enter product description">
                  </div>

                  <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="prod_price">Price</label>
                                <input type="text" name="prod_price" class="form-control" id="prod_price" placeholder="Enter product price">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Unit</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Kg</option>
                                    <option>Gm</option>
                                    <option>Ltr</option>
                                    <option>Pc</option>
                                </select>
                            </div>
                        </div>
                  </div>

                  <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="prod_stock">Stock</label>
                                <input type="text" name="prod_stock" class="form-control" id="prod_stock" placeholder="Enter product stock">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label>Category</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">cat-1</option>
                                    <option>cat-2</option>
                                    <option>cat-3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label>Sub Category</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">subcat-1</option>
                                    <option>subcat-2</option>
                                    <option>subcat-3</option>
                                </select>
                            </div>
                        </div>
                  </div>

                  
                  <div class="form-group">
                    <label for="prod_attribute">Attributes</label>
                    <input type="text" name="prod_attribute" class="form-control" id="prod_attribute" placeholder="Enter product attribute">
                  </div>

                  <div class="form-group">
                    <label for="cat_image">Product Image</label>
                    <input type="file" name="cat_image" class="form-control" id="cat_image">
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
          
            
       
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection