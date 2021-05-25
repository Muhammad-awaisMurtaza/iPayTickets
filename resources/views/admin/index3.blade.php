@extends('layouts.master')
@section('css')
<!-- Morris.js Charts Plugin -->
<link href="{{URL::asset('assets/plugins/morris/morris.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<div class="page-header">
							<h4 class="page-title">Dashboard</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard 03</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row row-cards">
							<div class="col-sm-12 col-md-6 col-lg-3">
								<div class="card widgets-cards bg-primary shadow-primary">
									<div class="card-body d-flex justify-content-center align-items-center">
										<div class="chart-circle chart-circle-sm mr-5" data-value="0.62" data-thickness="6" data-color="#c189fc"><canvas width="64" height="64"></canvas><div class="chart-circle-value text-white">70%</div></div>
										<div class="wrp text-wrapper text-white">
											<p class="mt-3">$8758</p>
											<p class="mt-1">This Week Orders</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-3">
								<div class="card widgets-cards bg-success shadow-success">
									<div class="card-body d-flex justify-content-center align-items-center">
										<div class="chart-circle chart-circle-sm mr-5" data-value="0.42" data-thickness="6" data-color="#2b9146"><canvas width="64" height="64"></canvas><div class="chart-circle-value text-white">42%</div></div>
										<div class="wrp text-wrapper text-white">
											<p class="mt-3">7847</p>
											<p class=" mt-1">This Week Earnings</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-3">
								<div class="card widgets-cards bg-secondary shadow-secondary">
									<div class="card-body d-flex justify-content-center align-items-center">
										<div class="chart-circle chart-circle-sm mr-5" data-value="0.37" data-thickness="6" data-color="#f66b4e"><canvas width="64" height="64"></canvas><div class="chart-circle-value text-white">17%</div></div>
										<div class="wrp text-wrapper text-white">
											<p class="mt-3">6477</p>
											<p class=" mt-1">This Week Views</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-3">
								<div class="card widgets-cards bg-info shadow-info">
									<div class="card-body d-flex justify-content-center align-items-center">
										<div class="chart-circle chart-circle-sm mr-5" data-value="0.42" data-thickness="6" data-color="#3578d5"><canvas width="64" height="64"></canvas><div class="chart-circle-value text-white">37%</div></div>
										<div class="wrp text-wrapper text-white">
											<p class="mt-3">345</p>
											<p class=" mt-1">This Week Comments</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-8">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Company Growth</h3>
									</div>
									<div class="card-body">
										<div id="morrisBar-chart" class="chartsh"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Monthly Company Growth</h3>
									</div>
									<div class="card-body">
										<div id="morrisBar-graph" class="chartsh BarChartShadow"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row row-cards">
						    <div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Top Countries</h3>
									</div>
									<div class="card-body">
										<table class="table card-table ">
											<tbody>
												<tr>
													<td class="w-1"><i class="flag flag-us mt-2"></i></td>
													<td>USA
														<div class="progress progress-xs mt-1">
															<div class="progress-bar bg-primary" style="width: 78%"></div>
														</div>
													</td>
													<td class="w-1 text-right"><span class="text-muted">$6425</span></td>
												</tr>
												<tr>
													<td><i class="flag flag-pl mt-2"></i></td>
													<td>Poland
														<div class="progress progress-xs mt-2">
															<div class="progress-bar bg-secondary" style="width: 62%"></div>
														</div>
													</td>
													<td class="text-right"><span class="text-muted">$5582</span></td>
												</tr>
												<tr>
													<td><i class="flag flag-de mt-2"></i></td>
													<td>Germany
														<div class="progress progress-xs mt-2">
															<div class="progress-bar bg-warning" style="width: 48%"></div>
														</div>
													</td>
													<td class="text-right"><span class="text-muted">$4587</span></td>
												</tr>
												<tr>
													<td><i class="flag flag-ru mt-2"></i></td>
													<td>Russia
														<div class="progress progress-xs mt-2">
															<div class="progress-bar bg-success" style="width: 35%"></div>
														</div>
													</td>
													<td class="text-right"><span class="text-muted">$2520</span></td>
												</tr>
												<tr>
													<td><i class="flag flag-in mt-2"></i></td>
													<td>India
														<div class="progress progress-xs mt-2">
															<div class="progress-bar bg-primary" style="width: 35%"></div>
														</div>
													</td>
													<td class="text-right"><span class="text-muted ">$2520</span></td>
												</tr>
												<tr>
													<td><i class="flag flag-pk mt-2"></i></td>
													<td>Pakistan
														<div class="progress progress-xs mt-2">
															<div class="progress-bar bg-info" style="width: 35%"></div>
														</div>
													</td>
													<td class="text-right"><span class="text-muted ">$2520</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 col-lg-4">
								<div class="card h-100">
									<div class="card-header">
										<h2 class="card-title">Chat</h2>
									</div>
									<div class="card-body  h-100">
										<div class="media event">
											<a class="pull-left message-avatar mb-1 ">
												<img src="{{URL::asset('assets/images/faces/male/18.jpg')}}" alt="">
											</a>
											<div class="media-body">
												<div class="pull-left">
													<a class="title" href="#">Warren Reid</a>
													<p>Via Facebook</p>
												</div>
												<div class="pull-right ">
													<p class="text-success mb-0"><i class="fa fa-eye mr-2"></i>876</p>
													<p class="text-muted">10:45 pm</p>
												</div>
											</div>
										</div>
										<div class="media event">
											<a class="pull-left message-avatar mb-1">
												<img src="{{URL::asset('assets/images/faces/male/25.jpg')}}" alt="">
											</a>
											<div class="media-body">
												<div class="pull-left">
													<a class="title" href="#">Bella</a>
													<p>Via Email</p>
												</div>
												<div class="pull-right">
													<p class="text-danger mb-0"><i class="fa fa-eye mr-2"></i>456</p>
													<p class="text-muted">06:66 am</p>
												</div>
											</div>
										</div>
										<div class="media event">
											<a class="pull-left message-avatar mb-1">
												<img src="{{URL::asset('assets/images/faces/male/20.jpg')}}" alt="">
											</a>
											<div class="media-body">
												<div class="pull-left">
													<a class="title" href="#">David	Morgan</a>
													<p>Via Google</p>
												</div>
												<div class="pull-right">
													<p class="text-primary mb-0"><i class="fa fa-eye mr-2"></i>675</p>
													<p class="text-muted">11:15 am</p>
												</div>
											</div>
										</div>
										<div class="media event">
											<a class="pull-left message-avatar mb-1">
												<img src="{{URL::asset('assets/images/faces/male/21.jpg')}}" alt="">
											</a>
											<div class="media-body">
												<div class="pull-left">
													<a class="title" href="#">Christian	Tucker</a>
													<p>Via Tiwtter</p>
												</div>
												<div class="pull-right">
													<p class="text-warning mb-0"><i class="fa fa-eye mr-2"></i>234</p>
													<p class="text-muted">04:55 am</p>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer text-center">
										<a href="#"><i class="fa fa-angle-down" ></i> View More</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Templates List</h3>
									</div>
									<div class="table-responsive pt-3 pb-3">
										<table class="table card-table table-vcenter text-nowrap">
											<tbody>
												<tr>
													<td class="no-border">Wordpress</td>
													<td class="no-border text-right"><span class="btn btn-primary btn-sm">$55</span></td>
												</tr>
												<tr>
													<td>Web Themes</td>
													<td class="text-right"><span class="btn btn-success btn-sm">$12</span></td>
												</tr>
												<tr>
													<td>Html & css</td>
													<td class="text-right"><span class="btn btn-secondary btn-sm">$40</span></td>
												</tr>
												<tr>
													<td>Designing</td>
													<td class="text-right"><span class="btn btn-primary btn-sm">$50</span></td>
												</tr>
												<tr>
													<td>PSD templates</td>
													<td class="text-right"><span class="btn btn-success btn-sm">$35</span></td>
												</tr>
												<tr>
													<td>eCommerce</td>
													<td class="text-right"><span class="btn btn-secondary btn-sm">$45</span></td>
												</tr>

											</tbody>
										</table>
									</div>
									<div class="card-footer text-center">
										<a href="#"><i class="fa fa-angle-down" ></i> View More</a>
									</div>
								</div>
							</div>

                            <div class="col-lg-5 col-sm-12 col-xl-4 ">
								<div class="card  h-100">
									<div class="card-body text-center profile h-100">
									    <div class="image">
										    <img src="{{URL::asset('assets/images/background.jpg')}}" alt="">
											<div class="box img-absolute">
												<div class="img-1">
													<img src="{{URL::asset('assets/images/faces/female/1.jpg')}}" alt="">
												</div>
											</div>
										</div>
										<div class="pt-6 box">
											<div >
												<h2 class="mt-7">Angelena Nolasco<br><span class="mt-2 mb-0 badge badge-primary">Web Designer</span></h2>
												<p class=" mt-0"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod elit
													..</p>
												<span>
													<ul>
														<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
													</ul>
												</span>
										    </div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-7 col-xl-8">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">User feedback</h3>
									</div>
									<div >
										<div class="table-responsive border-top">
											<table class="table card-table table-striped table-vcenter">
												<thead>
													<tr>
														<th>Id</th>
														<th colspan="2">User</th>
														<th>Feed back</th>
														<th>Date</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>2345</td>
														<td><span class="avatar brround " style="background-image: url({{URL::asset('assets/images/faces/male/1.jpg')}})"></span></td>
														<td>Megan Peters</td>
														<td>please check pricing Info </td>
														<td class="text-nowrap">July 13, 2018</td>
														<td class="w-1"><a href="#" class="icon"><i class="fa fa-trash-o text-danger"></i></a></td>
													</tr>
													<tr>
														<td>4562</td>
														<td><span class="avatar brround" style="background-image: url({{URL::asset('assets/images/faces/female/1.jpg')}})"></span></td>
														<td>Phil Vance</td>
														<td>New stock</td>
														<td class="text-nowrap">June 15, 2018</td>
														<td><a href="#" class="icon"><i class="fa fa-trash-o text-danger"></i></a></td>
													</tr>
													<tr>
														<td>8765</td>
														<td><span class="avatar brround">AS</span></td>
														<td>Adam Sharp</td>
														<td>Daily updates</td>
														<td class="text-nowrap">July 8, 2018</td>
														<td><a href="#" class="icon"><i class="fa fa-trash-o text-danger"></i></a></td>
													</tr>
													<tr>
														<td>2665</td>
														<td><span class="avatar brround" style="background-image: url({{URL::asset('assets/images/faces/male/4.jpg')}})"></span></td>
														<td>Samantha Slater</td>
														<td>available item list</td>
														<td class="text-nowrap">June 28, 2018</td>
														<td><a href="#" class="icon"><i class="fa fa-trash-o text-danger"></i></a></td>
													</tr>
													<tr>
														<td>8547</td>
														<td><span class="avatar brround" style="background-image: url({{URL::asset('assets/images/faces/female/11.jpg')}})"></span></td>
														<td>Joanne Nash</td>
														<td>Provide Best Services</td>
														<td class="text-nowrap">July 2, 2018</td>
														<td><a href="#" class="icon"><i class="fa fa-trash-o text-danger"></i></a></td>
													</tr>
													<tr>
														<td>3425</td>
														<td><span class="avatar brround" style="background-image: url({{URL::asset('assets/images/faces/female/14.jpg')}})"></span></td>
														<td>Ruby Wisely</td>
														<td>Best stock</td>
														<td class="text-nowrap">May 28, 2018</td>
														<td><a href="#" class="icon"><i class="fa fa-trash-o text-danger"></i></a></td>
													</tr>
													<tr>
														<td>1245</td>
														<td><span class="avatar brround" style="background-image: url({{URL::asset('assets/images/faces/male/21.jpg')}})"></span></td>
														<td>Daneil Smash</td>
														<td>new trends</td>
														<td class="text-nowrap">Apr 2, 2018</td>
														<td><a href="#" class="icon"><i class="fa fa-trash-o text-danger"></i></a></td>
													</tr>
												</tbody>
											</table>
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
<!-- Input Mask Plugin -->
<script src="{{URL::asset('assets/plugins/input-mask/jquery.mask.min.js')}}"></script>
<!--Morris.js Charts Plugin -->
<script src="{{URL::asset('assets/plugins/morris/morris.js')}}"></script>
<script src="{{URL::asset('assets/plugins/morris/raphael-min.js')}}"></script>
<script src="{{URL::asset('assets/js/index3.js')}}"></script>
<!-- c3.js Charts Plugin -->
<script src="{{URL::asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/charts-c3/c3-chart.js')}}"></script>
@endsection