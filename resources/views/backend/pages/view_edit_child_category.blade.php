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
              <li class="breadcrumb-item active">Child-Category Edit</li>
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
                <h3 class="card-title">Child-Category <small>edit child-category</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" style="padding:10px;" action="{{ route('updatechildcate', $data->id) }}" method="post">
              @csrf  
                  <div class="form-group">
                  <label>Category</label>
                      <select class='form-control select2 select_cat' name="category_select" id="category_select" style="width: 100%;">
                          <option value="">Select</option>
                          @foreach($maincat as $cat)
                            <option value="{{ $cat->id }}" {{ ( $cat->id == $data->categories_id) ? 'selected' : '' }}>{{ $cat->en_name }}</option>
                          @endforeach
                      </select>
                      <span class="text-danger">@error('category_select') {{$message}} @enderror</span>
                  </div>
                  <div class="form-group">
                  <label>Sub Category</label>
                    <select class='form-control select2' name="sub_category_select" id="sub_category_select" style="width: 100%;">
                        <option value="">Select</option>
                         @foreach($subcat as $cat)
                            <option value="{{ $cat->id }}" {{ ( $cat->id == $data->subcategories_id) ? 'selected' : '' }}>{{ $cat->en_name }}</option>
                          @endforeach
                    </select>
                    <span class="text-danger">@error('sub_category_select') {{$message}} @enderror</span>
                  </div>
                  <div class="form-group">
                    <label for="child_en_name">Child Category Name</label>
                    <input type="text" name="child_en_name" class="form-control" id="child_en_name" value="{{ $data->child_en_name }}">
                    <span class="text-danger">@error('child_en_name') {{ $message }} @enderror</span>
                  </div>
                  
                  <div class="form-group">
                    <label for="child_bn_name">Child Category Name(Bangla)</label>
                    <input type="text" name="child_bn_name" class="form-control" id="child_bn_name" value="{{ $data->child_bn_name }}">
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

@push('dependencies-scripts')
<script type="text/javascript">
  $(document).ready(function () {

    $('#category_select').on('change', function () {
      var category_id = this.value;
      // console.log(category_id);
      $.ajax({
        url: '{{ route('getStates') }}?cat_id='+category_id,
        type: 'get',
        success: function (res) {
          $('#sub_category_select').html('<option value="">Select State</option>');
          $.each(res, function(key, value) {
              $('#sub_category_select').append('<option value="' + value.id + '">' + value.name + '</option>')
          });
        }
      });
    });

  });
</script>
@endpush