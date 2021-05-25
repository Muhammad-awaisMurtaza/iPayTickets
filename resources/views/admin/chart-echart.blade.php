@extends('layouts.master')
@section('css')
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">ECharts Charts</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">ECharts Charts</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line chart</h3>
									</div>
									<div class="card-body">
										<div id="echart1" class="chartsh BarChartShadow"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Combination of Line & Bar Chart</h3>
									</div>
									<div class="card-body">
										<div id="echart2" class="chartsh GradientlineShadow"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Vertical Line chart</h3>
									</div>
									<div class="card-body">
										<div id="echart3" class="chartsh BarChartShadow"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Vertical Combination of Line & Bar Chart</h3>
									</div>
									<div class="card-body">
										<div id="echart4" class="chartsh GradientlineShadow"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Bar Chart</h3>
									</div>
									<div class="card-body">
										<div id="echart5" class="chartsh BarChartShadow"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Horizontal Bar Chart</h3>
									</div>
									<div class="card-body">
										<div id="echart6" class="chartsh BarChartShadow"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Single line chart</h3>
									</div>
									<div class="card-body">
										<div id="echart7" class="chartsh GradientlineShadow"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Single smooth line chart</h3>
									</div>
									<div class="card-body">
										<div id="echart8" class="chartsh GradientlineShadow"></div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
@endsection
@section('js')
<!-- ECharts Plugin -->
<script src="{{URL::asset('assets/plugins/echarts/echarts.js')}}"></script>
<!-- Input Mask Plugin -->
<script src="{{URL::asset('assets/plugins/input-mask/jquery.mask.min.js')}}"></script>
<!-- Index Scripts -->
<script src="{{URL::asset('assets/js/echarts-dark.js')}}"></script>	
@endsection