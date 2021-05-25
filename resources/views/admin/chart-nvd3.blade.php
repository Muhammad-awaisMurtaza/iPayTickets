@extends('layouts.master')
@section('css')
<!-- nvd3.js Charts Plugin -->
<link href="{{URL::asset('assets/plugins/charts-nvd3/nv.d3-dark.css')}}" rel="stylesheet" />
<!-- Morris.js Charts Plugin -->
<link href="{{URL::asset('assets/plugins/morris/morris.css')}}" rel="stylesheet" />
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">Nvd3 Charts</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Nvd3 Charts</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Bar Chart With Multiple colors</h3>
									</div>
									<div class="card-body">
										<div id="nvd3-chart1" style="width: 100%; height: 400px;"> <svg></svg></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Bar Chart</h3>
									</div>
									<div class="card-body">
										<svg id="nvd3-chart2" style="width: 100%; height: 400px;"></svg>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Line Chart With Zooming Options</h3>
									</div>
									<div class="card-body">
										<div id="chartZoom">
											<a class="btn btn-outline-secondary btn-sm" id="zoomIn">+</a> <a  class="btn btn-outline-secondary btn-sm" id="zoomOut">-</a>
										</div>
										<div id="nvd3-chart3" style="width: 100%; height: 400px;" class='with-transitions'>
											<svg></svg>
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
<!--dygraph Charts Plugin -->
<script src="{{URL::asset('assets/plugins/charts-nvd3/d3.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/charts-nvd3/nv.d3.js')}}"></script>
<script src="{{URL::asset('assets/plugins/charts-nvd3/stream_layers.js')}}"></script>
<!-- Index Scripts -->
<script src="{{URL::asset('assets/js/nvd3.js')}}"></script>
@endsection