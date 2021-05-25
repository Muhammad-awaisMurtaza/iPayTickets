@extends('layouts.master')
@section('css')
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">C3 Line Charts</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">C3 Line Charts</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Sales Growth in every Month</h3>
									</div>
									<div class="card-body">
										<div id="chart-employment" class="chartsh"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 1</h3>
									</div>
									<div class="card-body">
										<div id="chart-sracked" class="chartsh"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line chart 2</h3>
									</div>
									<div class="card-body">
										<div id="chart-spline-rotated" class="chartsh"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 3</h3>
									</div>
									<div class="card-body">
										<div id="chart-temperature" class="chartsh"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 4</h3>
									</div>
									<div class="card-body">
										<div id="chart-area-spline-sracked" class="chartsh"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 5 </h3>
									</div>
									<div class="card-body">
										<div id="chart-spline" class="chartsh"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 6</h3>
									</div>
									<div class="card-body">
										<div id="chart-area" class="chartsh"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 7</h3>
									</div>
									<div class="card-body">
										<div id="chart-area-spline" class="chartsh"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart with step</h3>
									</div>
									<div class="card-body">
										<div id="chart-area-step" class="chartsh"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart 8</h3>
									</div>
									<div class="card-body">
										<div id="chart-step" class="chartsh"></div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
@endsection
@section('js')
<!-- c3.js Charts Plugin -->
<script src="{{URL::asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/charts-c3/c3-chart.js')}}"></script>
<!-- Input Mask Plugin -->
<script src="{{URL::asset('assets/plugins/input-mask/jquery.mask.min.js')}}"></script>
<!-- Index Scripts -->
<script src="{{URL::asset('assets/js/charts.js')}}"></script>
@endsection