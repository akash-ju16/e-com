@extends('backend.auth.layout.app')
@section('title', 'E-com | Registration')
@section('reg-log-form')
<div class="register-box">
  <div class="register-logo">
    <a href="{{ route('admin') }}"><b>Admin</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form id="registerFormValidate" action="" method="post">
        @csrf

        <span class="text-danger">
          @error('full_name')
            {{$message}}
          @enderror
          </span>
        <div class="input-group mb-3">
          <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Full name" value="{{old('full_name')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <span class="text-danger">
          @error('email')
            {{$message}}
          @enderror
          </span>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <span class="text-danger">
          @error('password')
            {{$message}}
          @enderror
          </span>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <span class="text-danger">
          @error('confirm_password')
            {{$message}}
          @enderror
          </span>
        <div class="input-group mb-3">
          <input type="password" name="confirm_password" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" name="save" value="Register" class="btn btn-info">
            <!-- <button type="button" class="btn btn-primary btn-block">Register</button> -->
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

@endsection

<!-- @push('js')
  <script>
    $(document).ready(function(){
      alert('Registration');
    });
  </script>
@endpush -->
@push('js-script')



<script>
    $(document).ready(function(){
    
          $('#registerFormValidate').validate({
            rules:
            {
              full_name : 
              {
                required : true,
                minlength : 5
              },
              email: 'required', //note: when use multiple rules then using object. otherwise not using object.
              password : 
              {
                required : true,
                minlength : 5
              }, 
              confirm_password: 
              {
                required : true,
                minlength : 5,
                equalTo : '#password'
              }
            },
            messages :
            {
              full_name : 
              {
                required :  'Please enter your full name',
                minlength : 'Name should be 5 character must'
              },
              email: 'please enter a valid email',
              password : 
              {
                required: 'please enter a valid password',
                minlength : 'password should be 5 characters'
              },
              confirm_password: 
              {
                required: 'please enter confirm password',
                minlength : 'confirm_password should be 5 characters',
                equalTo : 'Please enter same password'
              }
            },
            
            submitHandler:function(form) 
            {
                form.submit();
            }

          });
     



    });
</script>
@endpush