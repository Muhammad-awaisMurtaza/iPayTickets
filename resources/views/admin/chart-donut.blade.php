@extends('layouts.master')
@section('css')
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">C3 Donut Charts</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">C3 Donut Charts</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Donut Chart</h3>
									</div>
									<div class="card-body">
										<div id="chart-donut" class="chartsh"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Donut Chart2</h3>
									</div>
									<div class="card-body">
										<div id="chart-donut2" class="chartsh"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Donut Chart3</h3>
									</div>
									<div class="card-body">
										<div id="chart-donut3" class="chartsh"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Donut Chart4</h3>
									</div>
									<div class="card-body">
										<div id="chart-donut4" class="chartsh"></div>
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