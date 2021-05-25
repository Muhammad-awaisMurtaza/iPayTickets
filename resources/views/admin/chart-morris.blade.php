@extends('layouts.master')
@section('css')
<!-- Morris.js Charts Plugin -->
<link href="{{URL::asset('assets/plugins/morris/morris.css')}}" rel="stylesheet" />
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">Morris Charts</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Morris Charts</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Area chart</h3>
									</div>
									<div class="card-body">
										<div id="morrisBar2" class="chartsh"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Area chart 2</h3>
									</div>
									<div class="card-body">
										<div id="morrisBar3" class="chartsh"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Single bar chart</h3>
									</div>
									<div class="card-body">
										<div id="morrisBar4" class="chartsh"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Multiple Bar chart</h3>
									</div>
									<div class="card-body">
										<div id="morrisBar5" class="chartsh"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">line chart animated</h3>
									</div>
									<div class="card-body">
										<div id="morrisBar6" class="chartsh"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">line chart</h3>
									</div>
									<div class="card-body">
										<div id="morrisBar7" class="chartsh"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Donut chart</h3>
									</div>
									<div class="card-body">
										<div id="morrisBar8" class="chartsh"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Donut chart with multiple colors</h3>
									</div>
									<div class="card-body">
										<div id="morrisBar9" class="chartsh"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
@section('js')
<!--Morris.js Charts Plugin -->
<script src="{{URL::asset('assets/plugins/morris/raphael-min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/morris/morris-dark.js')}}"></script>
<!-- Input Mask Plugin -->
<script src="{{URL::asset('assets/plugins/input-mask/jquery.mask.min.js')}}"></script>
<!-- Index Scripts -->
<script src="{{URL::asset('assets/js/morris.js')}}"></script>
@endsection