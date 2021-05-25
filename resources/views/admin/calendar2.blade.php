@extends('layouts.master')
@section('css')
<!-- fullcalendar Css-->
<link href="{{URL::asset('assets/plugins/fullcalendar/fullcalendar.min-dark.css')}}" rel="stylesheet">
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">Full Calendar</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Components</a></li>
								<li class="breadcrumb-item active" aria-current="page">Full Calendar</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
								<div class="col-lg-4">
									<div class="main-content-left main-content-left-calendar card card--calendar p-0 mg-b-20">
										<div class="p-4 border-bottom">
											<h2 class="main-content-title mg-b-15 tx-16">My Calendar</h2>
										</div>
										<div class="p-4">
											<label class="main-content-label tx-14 tx-bold mg-b-10">Event List</label>
											<nav class="nav main-nav-column main-nav-calendar-event">
												<a class="nav-link" href=""><i class="fa fa-calendar-o mr-2 text-primary "></i>
												<div>
													Calendar Events
												</div></a> <a class="nav-link" href=""><i class="fa fa-calendar-o mr-2 text-secondary"></i>
												<div>
													Birthday Events
												</div></a> <a class="nav-link" href=""><i class="fa fa-calendar-o mr-2 text-success"></i>
												<div>
													Holiday Calendar
												</div></a> <a class="nav-link" href=""><i class="fa fa-calendar-o mr-2 text-info"></i>
												<div>
													Other Calendar
												</div></a> <a class="nav-link exclude" href=""><i class="fa fa-calendar-o mr-2 "></i>
												<div>
													Discovered Events
												</div></a>
											</nav>
										</div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="main-content-body main-content-body-calendar card p-4">
										<div class="main-calendar" id="calendar"></div>
									</div>
								</div>
							</div>
								</div>
							</div>
			             </div>
@endsection
@section('js')
<!-- JavaScript-->
<script src="{{URL::asset('assets/plugins/fullcalendar/moment.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
<!-- app calendar js -->
<script src="{{URL::asset('assets/js/app-calendar-events.js')}}"></script>
<script src="{{URL::asset('assets/js/app-calendar.js')}}"></script>	
@endsection