@extends('layouts.master2')
@section('css')
@endsection
@section('content')
			<div class="page h-100">
				<div class="page-single">
					<div class="container">
						<div class="row authentication">
							<div class="col-lg-5 col-xl-4 col-md-6 d-block col-login mx-auto">
								<div class="text-center mb-6">
									<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="h-8" alt="">
								</div>
								<form class="card" method="post">
									<div class="card-body p-6 ">
										<div class="card-title text-center">Login to your Account</div>
										<div class="input-icon form-group wrap-input">
											<span class="input-icon-addon search-icon">
												<i class="mdi mdi-account"></i>
											</span>
											<input type="text" class="form-control" placeholder="Username">
										</div>
										<div class="input-icon form-group wrap-input">
											<span class="input-icon-addon search-icon">
												<i class="zmdi zmdi-lock"></i>
											</span>
											<input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
											<label class="form-label">
												<a href="{{ url('/' . $page='forgot-password') }}" class="float-right small">I forgot password</a>
											</label>
										</div>
										<div class="form-group mt-5">
											<label class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" />
												<span class="custom-control-label">Remember me</span>
											</label>
										</div>
										<div class="form-footer">
											<button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>
										<div class="text-center text-muted mt-3">
											Don't have account yet? <a href="{{ url('/' . $page='register') }}">Sign up</a>
										</div>
										<div class="flex-c-m text-center mt-5">
											<a href="#" class="login100-social-item bg1">
												<i class="fa fa-facebook"></i>
											</a>

											<a href="#" class="login100-social-item bg2">
												<i class="fa fa-twitter"></i>
											</a>

											<a href="#" class="login100-social-item bg3">
												<i class="fa fa-google"></i>
											</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
@section('js')
@endsection