@include('adminlte.header')
@section('title','Doctor Login')

<body class="hold-transition login-page" style="background-image: url({{asset('control')}}/media/img/bg/bg7.jpg);">
    <div class="login-box">
    
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">      Sign in As a Doctor to start your session</p>
              
                <form action="{{ route('doctor.login') }}" method="post">
                @csrf   
                <div class="input-group mb-3">
                        <input type="email" class="form-control" class="form-control m-input @error('email') is-invalid @enderror"    value="{{ old('email') }}" name="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control m-input m-login__form-input--last @error('password') is-invalid @enderror"  placeholder="Password" name="password"  autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <label class="m-checkbox  m-checkbox--light">
									<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
									Remember me
									<span></span>
								</label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!-- <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div> -->
                <!-- /.social-auth-links -->

                
                <!-- <p class="mb-0">
                    <a href="{{-- route('doctor.register') --}}" class="text-center">Register a new membership</a>
                </p> -->
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
    @include('adminlte.footer')
