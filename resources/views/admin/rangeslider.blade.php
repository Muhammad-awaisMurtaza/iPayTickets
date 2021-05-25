@extends('layouts.master')
@section('css')
<!-- Ion.RangeSlider -->
<link href="{{URL::asset('assets/plugins/ion.rangeSlider-dark/css/ion.rangeSlider.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/ion.rangeSlider-dark/css/ion.rangeSlider.skinSimple.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<div class="page-header">
							<h4 class="page-title">Range slider</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">UI Design</a></li>
								<li class="breadcrumb-item active" aria-current="page">Range slider</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row grid_slider">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<p>Default grid slider with min and max values</p>
												<input type="text" id="range" value="" name="range" />
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<div class="row grid_slider">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<p>Grid with slider labels are far away outside it's container</p>
												<input type="text" id="range_25" value="" name="range" />
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<div class="row grid_slider">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<p>Grid with labels inside container using force_edges attribute</p>
												<input type="text" id="range_27" value="" name="range" />
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<div class="row grid_slider">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<p>Create Grid with pre-defined steps</p>
												<input type="text" id="range_26" value="" name="range" />
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<div class="row grid_slider">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<p>Prevent one from dragging the labels</p>
												<input type="text" id="range_31" value="" name="range" />
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<div class="row grid_slider">
											<div class="col-md-12 col-sm-12 col-xs-12">
												<p>Grid with minimum and maximum values</p>
												<input type="text" class="range_min_max" value="" name="range" />
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
<!-- Ion.RangeSlider -->
<script src="{{URL::asset('assets/plugins/ion.rangeSlider-dark/js/ion.rangeSlider.min.js')}}"></script>
<!--custom js -->
<script src="{{URL::asset('assets/js/range.js')}}"></script>
<script>
	function betterParseFloat(x){
		if(isNaN(parseFloat(x)) && x.length > 0)
		return betterParseFloat(x.substr(1));
		return parseFloat(x);
	}
	function usd(x){
		x = betterParseFloat(x);
		if(isNaN(x))
		return "$0.00";
		var dollars = Math.floor(x);
		var cents = Math.round((x - dollars) * 100) + "";
		if(cents.length==1)cents = "0"+cents;
		return "$"+dollars+"."+cents;
	}
</script>
@endsection