@extends('layouts.master2')
@section('css')
@endsection
@section('content')
			<div class="page h-100">
				<div class="page-single">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 col-xl-4 col-md-6 d-block col-login mx-auto">
								<div class="text-center mb-6">
									<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="h-8" alt="">
								</div>
								<form class="card authentication"  method="post">
									<div class="card-body sign-up-page p-7">
										<div class="card-title text-center">Create New Account</div>
										<div class="input-icon form-group">
											<span class="input-icon-addon search-icon">
												<i class="mdi mdi-account"></i>
											</span>
											<input type="text" class="form-control" placeholder="Username">
										</div>
										<div class="input-icon form-group">
											<span class="input-icon-addon search-icon">
												<i class="zmdi zmdi-email"></i>
											</span>
											<input type="text" class="form-control" placeholder="Email">
										</div>
										<div class="input-icon form-group">
											<span class="input-icon-addon search-icon">
												<i class="zmdi zmdi-lock"></i>
											</span>
											<input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
										</div>
										<div class="form-group mt-5">
											<label class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" />
												<span class="custom-control-label">Agree the <a href="{{ url('/' . $page='terms') }}">terms and policy</a></span>
											</label>
										</div>
										<div class="form-footer">
											<button type="submit" class="btn btn-primary btn-block">Create new account</button>
										</div>
										<div class="text-center text-muted mt-4">
										Already have account? <a href="{{ url('/' . $page='login') }}">Sign in</a>
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