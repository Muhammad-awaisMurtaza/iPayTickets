@extends('layouts.master')
@section('css')
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">Counters</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">UI Design</a></li>
								<li class="breadcrumb-item active" aria-current="page">Time Counter</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row row-cards">
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Time Counting From 0
										</div>
									</div>
									<div class="card-body counters">
										<h3 id="timer-countup"></h3>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Time Counting From 60 to 20
										</div>
									</div>
									<div class="card-body">
										<h3 id="timer-countinbetween"></h3>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Time 1 minute counter
										</div>
									</div>
									<div class="card-body">
										<h3 id="timer-countercallback"></h3>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Time Counting days Limit
										</div>
									</div>
									<div class="card-body">
										<h3 id="timer-outputpattern"></h3>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Numbers counter
										</div>
									</div>
									<div class="card-body text-center">
										<h5>Employess</h5>
										<h2 class="counter">2569</h2>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Numbers counter
										</div>
									</div>
									<div class="card-body text-center">
										<h5>Profit</h5>
										<h2 class="counter"> 2,56989.32</h2>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Numbers counter
										</div>
									</div>
									<div class="card-body text-center">
										<h5>Errors</h5>
										<h2 class="counter">0.8998</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
@section('js')
<!--Time Counter -->
<script src="{{URL::asset('assets/plugins/counters/jquery.missofis-countdown.js')}}"></script>
<script src="{{URL::asset('assets/plugins/counters/counter.js')}}"></script>
<!--Counters -->
<script src="{{URL::asset('assets/plugins/counters/counterup.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/counters/waypoints.min.js')}}"></script>
@endsection