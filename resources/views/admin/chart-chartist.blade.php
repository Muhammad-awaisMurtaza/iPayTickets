@extends('layouts.master')
@section('css')
<!-- Morris.js Charts Plugin -->
<link href="{{URL::asset('assets/plugins/morris/morris.css')}}" rel="stylesheet" />
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">Chart Chartjs</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Chart Chartjs</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Top label chart</h3>
									</div>
									<div class="card-body">
										<div class="chart-container">
											<canvas id="chart-legend-top"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Right label chart</h3>
									</div>
									<div class="card-body">
										<div class="chart-container">
											<canvas id="chart-legend-right" ></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Bottom label chart</h3>
									</div>
									<div class="card-body">
										<div class="chart-container">
											<canvas id="chart-legend-bottom" ></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Left label chart</h3>
									</div>
									<div class="card-body">
										<div class="chart-container">
											<canvas id="chart-legend-left"></canvas>
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
<!--Morris.js Charts Plugin -->
<script src="{{URL::asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>
<!-- Input Mask Plugin -->
<script src="{{URL::asset('assets/plugins/input-mask/jquery.mask.min.js')}}"></script>
<!-- Index Scripts -->
<script src="{{URL::asset('assets/js/chart.js')}}"></script>	
@endsection