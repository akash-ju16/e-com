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
              <form id="quickForm" style="padding:10px;" action="{{ route('childcatepost') }}" method="post">
              @csrf  
                  <!-- <div id="app"></div> -->
                  <div class="form-group">
                  <label>Category</label>
                      <select class='form-control select2 select_cat' name="category_select" id="category_select" style="width: 100%;">
                          <option value="">Select</option>
                          @foreach($maincat as $key => $cat)
                            <option {{ Input::old('category_select') == $key ? 'selected="selected"' : '' }} value="{{ $cat->id }}">{{ $cat->en_name }}</option>
                          @endforeach
                      </select>
                      <span class="text-danger">@error('category_select') {{$message}} @enderror</span>
                  </div>
                  <div class="form-group">
                  <label>Sub Category</label>
                    <select class='form-control select2' name="sub_category_select" id="sub_category_select" style="width: 100%;">
                        <option value="">Select</option>
                         @foreach($subcat as $key => $cat)
                            <option {{ Input::old('sub_category_select') == $key ? 'selected="selected"' : '' }} value="{{ $cat->id }}">{{ $cat->en_name }}</option>
                          @endforeach
                    </select>
                    <span class="text-danger">@error('sub_category_select') {{$message}} @enderror</span>
                  </div>
                  <div class="form-group">
                    <label for="child_en_name">Child Category Name</label>
                    <input type="text" name="child_en_name" class="form-control" id="child_en_name" value="{{old('child_en_name')}}" placeholder="Enter child category name">
                    <span class="text-danger">@error('child_en_name') {{ $message }} @enderror</span>
                  </div>
                  
                  <div class="form-group">
                    <label for="child_bn_name">Child Category Name(Bangla)</label>
                    <input type="text" name="child_bn_name" class="form-control" id="child_bn_name" value="{{old('child_bn_name')}}" placeholder="Enter child category bangla name">
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
                    <th>Child Category Name</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                   @foreach($data as $item)
                   <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{ $item->maincategory->en_name }}</td>
                      <td>{{ $item->subcategorie->en_name }}</td>
                      <td>{{ $item->child_en_name }}</td>
                      <td><a class="btn btn-info btn-sm" href="{{ route('editchild', $item->id) }}"><i class="fas fa-pencil-alt"></i></a></td>
                    </tr>
                   @endforeach
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

<!-- @push('custom-page-script')
<script src="{{ mix('js/app.js') }}"></script>
@endpush -->

@push('dependencies-scripts')
<script type="text/javascript">
  $(document).ready(function () {

    $('#category_select').on('change', function () {
      var category_id = this.value;
      // console.log(category_id);
      $.ajax({
        url: '{{ route('getSubCat') }}?cat_id='+category_id,
        type: 'get',
        success: function (res) {
          $('#sub_category_select').html('<option value="">Select State</option>');
          $.each(res, function(key, value) {
              $('#sub_category_select').append('<option value="' + value.id + '">' + value.en_name + '</option>')
          });
        }
      });
    });

  });
</script>
@endpush