@extends('layouts.master2')
@section('css')
@endsection
@section('content')
			<div class="page h-100">
				<div class="page-single">
					<div class="container ">
						<div class="row authentication">
							<div class="col-lg-5 col-xl-4 col-md-6 d-block col-login mx-auto">
								<div class="text-center mb-6">
									<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="h-8" alt="">
								</div>
								<form class="card" method="post">
									<div class="card-body p-6">
										<div class="text-center card-title">Forgot password</div>
											<div class="input-icon form-group">
												<span class="input-icon-addon search-icon">
													<i class="zmdi zmdi-email"></i>
												</span>
												<input type="text" class="form-control" placeholder="Email">
											</div>
											<div class="form-footer">
												<button type="submit" class="btn btn-primary btn-block">Send</button>
											</div>
											<div class="text-center text-muted mt-3 ">
											Forget it, <a href="{{ url('/' . $page='login') }}">send me back</a> to the sign in screen.
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