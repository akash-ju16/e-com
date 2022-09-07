@extends('backend.layouts.app')

@section('title', 'Admin | Product')

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
              <form id="quickForm" action="{{ route('updateproduct', $productItem->id ) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="prod_name">Name <span class="text-danger">*</span></label>
                    <input type="text" name="prod_name" class="form-control" id="prod_name" value="{{ $productItem->prod_name }}">
                    <span class="text-danger">@error('prod_name') {{$message}} @enderror</span>
                  </div>
                  <div class="form-group">
                    <label for="prod_name_bangla">Name(Bangla)</label>
                    <input type="text" name="prod_name_bangla" class="form-control" id="prod_name_bangla" value="{{ $productItem->prod_name_bangla }}">
                  </div>

                  <div class="form-group">
                    <label for="prod_description">Description <span class="text-danger">*</span></label>
                    <textarea id="summernote" name="prod_description" type="text">{{ $productItem->prod_description }}</textarea>
                    <span class="text-danger">@error('prod_description') {{$message}} @enderror</span>
                  </div>

                  <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="prod_price">Price <span class="text-danger">*</span></label>
                                <input type="text" name="prod_price" class="form-control" id="prod_price" value="{{ $productItem->prod_price }}">
                                <span class="text-danger">@error('prod_price') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Unit <span class="text-danger">*</span></label>
                                <select class="form-control select2" name="prod_unit" id="prod_unit" style="width: 100%;">
                                <option value="">Select</option>
                                @foreach ($unit as $item)
                                  <option value="{{ $item }}" {{ ( $item == $productItem->prod_unit) ? 'selected' : '' }}> {{ $item }} </option>
                                @endforeach    
                                </select>
                                <span class="text-danger">@error('prod_unit') {{$message}} @enderror</span>
                            </div>
                        </div>
                  </div>

                  <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="prod_stock">Stock <span class="text-danger">*</span></label>
                                <input type="text" name="prod_stock" class="form-control" id="prod_stock" value="{{ $productItem->prod_stock }}">
                                <span class="text-danger">@error('prod_stock') {{$message}} @enderror</span>
                             </div>
                        </div>
                        
                  </div>
                  <div class="row" id="app"></div>
                  <input type="hidden" name="categories_id_hidden" class="form-control" id="categories_id_hidden" value="{{ $productItem->categories_id }}">
                  <input type="hidden" name="subcategories_id_hidden" class="form-control" id="subcategories_id_hidden" value="{{ $productItem->subcategories_id }}">
                  <div class="form-group">
                    <label for="prod_attribute">Attributes <span class="text-danger">*</span></label>
                    <input type="text" name="prod_attribute" class="form-control" id="prod_attribute" value="{{ $productItem->prod_attribute }}">
                    <span class="text-danger">@error('prod_attribute') {{$message}} @enderror</span>
                  </div>

                  <div class="form-group">
                    <label for="product_image">Product Image</label>
                    <img src="{{ asset('images/products/'.$productItem->product_image)  }}" width="80" height="60" alt="no image">
                    <input type="file" name="product_image" value="{{ old('product_image') }}" class="form-control" id="product_image">
                    <span class="text-danger">@error('product_image') {{$message}} @enderror</span>
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