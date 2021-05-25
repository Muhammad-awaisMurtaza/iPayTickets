@extends('layouts.master2')
@section('css')
<!-- Countdown css-->
<link href="{{URL::asset('assets/plugins/jquery-countdown/countdown.css')}}" rel="stylesheet">
@endsection
@section('content')
			<div  class="page page-construction h-100">
				<div class="page-single">
					<div class="container">
						<div class="row text-center  mx-auto authentication">
							<div class="col-lg-8 col-sm-12 center-block align-items-center construction  ">
								<div class="text-white">
									<div class="card-body">
										<h2 class="display-2 mb-0"><strong>Coming Soon</strong></h2>
										<div id="launch_date-1"></div>
										<p>we apologize for your in-convenience....any quaries contact me </p>
										<h4><strong>Contact:</strong> adminor@demo.com</h4>
										<div class="text-center ">
											<div class="flex-c-m ">
												<a href="#" class="login100-social-item bg1">
													<i class="fa fa-facebook fb-blue"></i>
												</a>
												<a href="#" class="login100-social-item bg2">
													<i class="fa fa-twitter"></i>
												</a>
												<a href="#" class="login100-social-item bg3">
													<i class="fa fa-google"></i>
												</a>
											</div>
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
<!--Counters -->
<script src="{{URL::asset('assets/plugins/jquery-countdown/countdown.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-countdown/jquery.plugin.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-countdown/jquery.countdown.js')}}"></script>
@endsection