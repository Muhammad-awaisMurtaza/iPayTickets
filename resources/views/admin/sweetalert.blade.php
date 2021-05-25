@extends('layouts.master')
@section('css')
<link href="{{URL::asset('assets/plugins/sweet-alert/sweetalert-dark.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<div class="page-header">
							<h4 class="page-title">Sweet-alert</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">UI Design</a></li>
								<li class="breadcrumb-item active" aria-current="page">Sweet-alert</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row row-deck">
							<div class="col-md-6 ">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Sweet-alert</h3>
									</div>
									<div class="card-body">
										<table class="table card-table border">
											<tr>
												<td>Title</td>
												<td><input type='text' class="form-control" placeholder='Title text' id='title'></td>
											</tr>
											<tr>
												<td>Message</td>
												<td><input type='text' class="form-control" placeholder='Your message' id='message'></td>
											</tr>
											<tr>
												<td colspan='2' class="mt-5 text-center">
													<input type='button' class="btn btn-primary mt-2" value='Simple alert' id='but1'>&nbsp;
													<input type='button' class="btn btn-primary mt-2" value='Alert with title' id='but2'>&nbsp;
													<input type='button' class="btn btn-primary mt-2" value='Alert with image' id='but3'>&nbsp;
													<input type='button' class="btn btn-primary mt-2" value='With timer' id='but4'>
												</td>
											</tr>
										</table>
									</div>
								</div>
                             </div>
							 <div class="col-md-6 ">
								<div class="card text-center">
									<div class="card-header">
										<h3 class="card-title">Alert Types</h3>
									</div>
									<div class="card-body mt-7">
										<p>You can show following types of message box &#8211; You need to specify this in <code>type</code> property as value.</p>

										<input type='button' class="btn btn-success mt-2" value='success alert' id='click'>
										<input type='button' class="btn btn-warning mt-2" value='Warning alert' id='click1'>
										<input type='button' class="btn btn-danger mt-2" value='Danger alert' id='click2'>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12 ">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Prompt and confirm box Demo</h3>
									</div>
									<div class="card-body">
										<table class="table card-table border">
											<tr>
												<td><input type='button' class="btn btn-secondary btn-block "  value='Prompt' id='prompt'></td>
												<td><input type='button' class="btn btn-primary btn-block" value='Confirm' id='confirm'></td>
											</tr>
										</table>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
@endsection
@section('js')
<!-- Popover js -->
<script src="{{URL::asset('assets/js/popover.js')}}"></script>
<!-- Sweet alert Plugin -->
<script src="{{URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{URL::asset('assets/js/sweet-alert-dark.js')}}"></script>
@endsection