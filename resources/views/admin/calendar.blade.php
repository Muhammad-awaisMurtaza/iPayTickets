@extends('layouts.master')
@section('css')
<!-- Calendar Plugin -->
<link href="{{URL::asset('assets/plugins/calendar/clndr-dark.css')}}" rel="stylesheet" />
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">Default Calendar</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Components</a></li>
								<li class="breadcrumb-item active" aria-current="page">Default Calendar</li>
							</ol>
						</div>
@endsection
@section('content')
						<div>
							<div class="card">
								<div class="card-body">
									<div class="cal1"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
@section('js')
<!-- Default calendar -->
<script src="{{URL::asset('assets/plugins/calendar/underscore-min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/calendar/moment.js')}}"></script>
<script src="{{URL::asset('assets/plugins/calendar/clndr.js')}}"></script>
<script src="{{URL::asset('assets/plugins/calendar/demo.js')}}"></script>
<script src="{{URL::asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>		
@endsection