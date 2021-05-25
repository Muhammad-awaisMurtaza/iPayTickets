@extends('layouts.master2')
@section('css')
@endsection
@section('content')
			<div class="page h-100">
				<div class="page-single">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 col-xl-4 col-md-6 d-block  col-login mx-auto authentication">
								<div class="text-center mb-6">
									<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="h-8" alt="">
								</div>
								<div class="card">
									<div class="card-body">
										<div class="text-center mb-4 ">
											<span class="avatar avatar-xxl  brround" style="background-image: url({{URL::asset('assets/images/faces/female/25.jpg')}})"></span>
										</div>
										<span class="m-4 d-none d-lg-block text-center">
											<span class="text-dark"><strong>Joyce Stewart</strong></span>
										</span>
										<div class="input-icon form-group">
											<span class="input-icon-addon search-icon">
												<i class="zmdi zmdi-lock"></i>
											</span>
											<input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
										</div>
										<div class="form-footer">
											<a href="{{ url('/' . $page='index') }}" class="btn btn-primary btn-block">Unlock</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
@section('js')
@endsection