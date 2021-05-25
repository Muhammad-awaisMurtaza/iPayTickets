@extends('layouts.master')
@section('css')
<!-- Dygraph Css -->
<link href="{{URL::asset('assets/plugins/dygraph-charts/dygraph.css')}}" rel="stylesheet">
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">Dyagraph Charts</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dyagraph Charts</li>
							</ol>
						</div>
@endsection
@section('content')
					<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Model 1 </h3>
									</div>
									<div class="card-body">
										<div id="mixed-error" style="width: 100%; height: 400px;"></div>
									</div>
								</div>
							</div>

							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Model 2 </h3>
									</div>
									<div class="card-body" >
										<div id="candlechart" style="width: 100%; height: 400px;"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Model 3 </h3>
									</div>
									<div class="card-body">
										<div id="multibar" style="width: 100%; height: 400px;"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Model 4 </h3>
									</div>
									<div class="card-body">
										<div id="barlinechart" style="width: 100%; height: 400px;"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Model 5</h3>
									</div>
									<div class="card-body">
										<div id="demodiv" style="width: 100%; height: 400px;"></div>
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
<script src="{{URL::asset('assets/plugins/dygraph-charts/dygraph.js')}}"></script>
<script src="{{URL::asset('assets/plugins/dygraph-charts/data.js')}}"></script>
<!-- Index Scripts -->
<script src="{{URL::asset('assets/js/chart-dygraph.js')}}"></script>	
@endsection