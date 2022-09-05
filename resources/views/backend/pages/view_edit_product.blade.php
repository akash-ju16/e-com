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
              <form id="quickForm" action="{{ route('addproduct') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="prod_name">Name</label>
                    <input type="text" name="prod_name" class="form-control" id="prod_name" value="{{ $productItem->prod_name }}" placeholder="Enter product name">
                    <span class="text-danger">@error('prod_name') {{$message}} @enderror</span>
                  </div>
                  <div class="form-group">
                    <label for="prod_name_bangla">Name(Bangla)</label>
                    <input type="text" name="prod_name_bangla" class="form-control" id="prod_name_bangla" value="{{ $productItem->prod_name_bangla }}" placeholder="Enter product name bangla">
                    <!-- <span class="text-danger">@error('prod_name_bangla') {{$message}} @enderror</span> -->
                  </div>

                  <div class="form-group">
                    <label for="prod_description">Description</label>
                    <textarea id="summernote" name="prod_description" type="text">{{ $productItem->prod_description }}</textarea>
                    <span class="text-danger">@error('prod_description') {{$message}} @enderror</span>
                  </div>

                  <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="prod_price">Price</label>
                                <input type="text" name="prod_price" class="form-control" id="prod_price" value="{{ $productItem->prod_price }}" placeholder="Enter product price">
                                <span class="text-danger">@error('prod_price') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Unit</label>
                                <select class="form-control select2" name="prod_unit" id="prod_unit" style="width: 100%;">
                                    <option value="">Select</option>
                                    <option value="Gm">Gm</option>
                                    <option value="Ltr">Ltr</option>
                                    <option value="Pc">Pc</option>
                                </select>
                                <span class="text-danger">@error('prod_unit') {{$message}} @enderror</span>
                            </div>
                        </div>
                  </div>

                  <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="prod_stock">Stock</label>
                                <input type="text" name="prod_stock" class="form-control" id="prod_stock" value="{{ $productItem->prod_stock }}" placeholder="Enter product stock">
                                <span class="text-danger">@error('prod_stock') {{$message}} @enderror</span>
                             </div>
                        </div>
                        
                  </div>
                  <div class="row" id="app"></div>
                  
                  <div class="form-group">
                    <label for="prod_attribute">Attributes</label>
                    <input type="text" name="prod_attribute" class="form-control" id="prod_attribute" value="{{ $productItem->prod_attribute }}" placeholder="Enter product attribute">
                    <span class="text-danger">@error('prod_attribute') {{$message}} @enderror</span>
                  </div>

                  <div class="form-group">
                    <label for="product_image">Product Image</label>
                    <input type="file" name="product_image" value="{{ old('product_image') }}" class="form-control" id="product_image">
                    <span class="text-danger">@error('product_image') {{$message}} @enderror</span>
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

@push('custom-page-script')
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()


  })
</script>
@endpush