@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<div class="page-header">
							<h4 class="page-title">Dashboard</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard 02</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row ">
							<div class=" col-lg-12">
								<div class="row">
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="card">
											<div class="card-body">
												<div class="card-value float-right bg-primary shadow-primary stamp stamp-lg"><i class="fa fa-users"></i></div>
												<div class="text-muted"><h5>Online Visitors</h5></div>
												<h3 class="mb-1">685</h3>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="card">
											<div class="card-body">
												<div class="card-value float-right stamp stamp-lg bg-secondary shadow-secondary "><i class="fa fa-shopping-cart"></i></div>
												<div class="text-muted"><h5>Total Sales</h5></div>
												<h3 class="mb-1">465</h3>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="card">
											<div class="card-body">
												<div class="card-value float-right bg-success shadow-success stamp stamp-lg"><i class="fa fa-briefcase"></i></div>
												<div class="text-muted"><h5>Total Projects</h5></div>
												<h3 class="mb-1">56</h3>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="card">
											<div class="card-body">
												<div class="card-value float-right stamp stamp-lg bg-info shadow-info"><i class="fa fa-usd"></i></div>
												<div class="text-muted"><h5>Today Income</h5></div>
												<h3 class="mb-1">567</h3>
											</div>
										</div>
									</div>
								</div>
							</div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xl-8">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Sales Status</h3>
									</div>
									<div class="card-body">
										<div id="echart5" class="chartsh"></div>
										<div class="col mt-4">
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12 col-xl-4">
							    <div class="card">
							        <div class="card-header">
									    <h4 class="card-title">Latest News</h4>
									</div>
									<div class="card-body">
							            <ul class="timeline">
											<li>
												<a href="#"><strong>New Projects</strong></a>
												<a href="#" class="float-right">21 October, 2018</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper</p>
											</li>
											<li>
												<a href="#"><strong>Job Seekers</strong></a>
												<a href="#" class="float-right">4 October, 2018</a>
												<p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae...</p>
											</li>
											<li>
												<a href="#"><strong>Employees</strong></a>
												<a href="#" class="float-right">1 September, 2018</a>
												<p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc...</p>
											</li>
										</ul>
								    </div>
								</div>
							</div>

							<div class="col-lg-4 col-md-12 col-xl-4">
								<div class="card ">
									<div class="card-header"><h5 class="card-title">Visitors</h5></div>
									<div class="card-body h-100">
										<div class="media m-b-20">
											<div class="d-flex mr-3">
												<a href="#"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{URL::asset('assets/images/faces/female/18.jpg')}}"> </a>
											</div>
											<div class="media-body">
												<a href="#" class="text-dark">Nathaniel Bustos</a>
												<div class="text-muted small">Manager</div>
												<a href="" class="text-primary font-13">Reply</a>
											</div>
											<button type="button" class="btn btn-primary btn-sm d-block">Follow</button>
										</div>
										<div class="media m-b-20">
											<div class="d-flex mr-3">
												<a href="#"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{URL::asset('assets/images/faces/female/4.jpg')}}"> </a>
											</div>
											<div class="media-body">
												<a href="#" class="text-dark">Latanya Kinard</a>
												<div class="text-muted small">Web Designer</div>
												<a href="" class="text-secondary font-13">Reply</a>
											</div>
											<button type="button" class="btn btn-secondary btn-sm d-block">Follow</button>
										</div>
										<div class="media m-b-20">
											<div class="d-flex mr-3">
												<a href="#"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{URL::asset('assets/images/faces/male/20.jpg')}}"> </a>
											</div>
											<div class="media-body">
												<a href="#" class="text-dark">George Lujan</a>
												<div class="text-muted small">Founder</div>
												<a href="" class="text-success font-13">Reply</a>
											</div>
											<button type="button" class="btn btn-success btn-sm d-block">Follow</button>
										</div>
									</div>
									<div class="card-footer text-center">
											<a href="#"><i class="fa fa-angle-down" ></i> View More</a>
									</div>
								</div>
						    </div>

							<div class="col-lg-4 col-sm-12 p-l-0 p-r-0 col-xl-4">
								<div class="card">
									<div class="card-header text-center">
										<h2 class="card-title">Projects</h2>
									</div>
									<div class="card-body">
										<div class="mx-auto chart-circle chart-circle-md mt-4 mb-4 text-center" data-value="0.75" data-thickness="8" data-color="#6b3e9e">
											<div class="chart-circle-value fs"><small>Total Sales</small><span class="mt-1">4.3K<span></div>
										</div>
										<div class="text-center">
											<h5 >Average Sales</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam velit quisquam veniam excepturi</p>
											<div class="col">
												<div class="float-left">
													  <h3 class="ml-5 label-medium-size text-primary "><i class="fa fa-caret-up fa-1x text-success mr-1"></i>$3.2K</h3>
													  <h6 class="ml-5 pb-0 ">last month</h6>
												</div>
												<div class="float-right">
													  <h3 class="mr-5 label-medium-size text-primary "><i class="fa fa-caret-up fa-1x text-success mr-1"></i>$2.4K</h3>
													  <h6 class="mr-5 mt-0">last year</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						    <div class="col-lg-4 col-sm-12 p-l-0 col-xl-4">
							    <div class="card">
									<div class="card-header">
										<h3 class="card-title">Team</h3>
									</div>
									<div class="card-body">
										<div>
											<div class="chips">
												<div class="team">
													<a href="javascript:void(0)" class="chip">
														<span class="avatar" style="background-image: url({{URL::asset('assets/images/faces/female/16.jpg')}})"></span> Victoria
													</a>
													<i class="fa fa-facebook text-fb-blue" aria-hidden="true"></i>
													<i class="fa fa-twitter text-info" aria-hidden="true"></i>
													<i class="fa fa-envelope text-red" aria-hidden="true"></i>
													<p>On the other hand, we denounce with righteous indignation and dislike imagesralized</p>
												</div>
												<div class="team">
													<a href="javascript:void(0)" class="chip">
														<span class="avatar" style="background-image: url({{URL::asset('assets/images/faces/male/41.jpg')}})"></span> Nathan
													</a>
													<i class="fa fa-facebook text-fb-blue" aria-hidden="true"></i>
													<i class="fa fa-twitter text-info" aria-hidden="true"></i>
													<i class="fa fa-envelope text-red" aria-hidden="true"></i>
													<p>On the other hand, we denounce with righteous indignation and dislike imagesralized</p>
												</div>
												<div class="team">
													<a href="javascript:void(0)" class="chip">
														<span class="avatar" style="background-image: url({{URL::asset('assets/images/faces/female/1.jpg')}})"></span> Alice
													</a>
													<i class="fa fa-facebook text-fb-blue" aria-hidden="true"></i>
													<i class="fa fa-twitter text-info" aria-hidden="true"></i>
													<i class="fa fa-envelope text-red" aria-hidden="true"></i>
													<p>On the other hand, we denounce with righteous indignation and dislike imagesralized</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-12 col-lg-4 col-xl-3">
								<div class="card ">
									<div class="card-header">
										<h2 class="card-title">Activity Details</h2>
									</div>
									<table class="table card-table">
										<tr >
											<td>Wordpress Template</td>
											<td class="text-right">
												<span class="badge badge-primary">25%</span>
											</td>
										</tr>
										<tr >
											<td>Blog Page</td>
											<td class="text-right">
												<span class="badge badge-warning">Pending</span>
											</td>
										</tr>
										<tr >
											<td>Designing websites</td>
											<td class="text-right">
												<span class="badge badge-danger">12%</span>
											</td>
										</tr>
										<tr >
											<td>E commerce Blog</td>
											<td class="text-right">
												<span class="badge badge-primary">60%</span>
											</td>
										</tr>
										<tr >
											<td>E-mail Templates</td>
											<td class="text-right">
												<span class="badge badge-secondary">15%</span>
											</td>
										</tr>
										<tr >
											<td>Business Website</td>
											<td class="text-right">
												<span class="badge badge-success">Finished</span>
											</td>
										</tr>
										<tr >
											<td>Admin Templates</td>
											<td class="text-right">
												<span class="badge badge-info">Finished</span>
											</td>
										</tr>
										<tr>
											<td>Beauty Templates</td>
											<td class="text-right">
												<span class="badge badge-warning">20%</span>
											</td>
										</tr>
									</table>
								</div>
							</div>

							<div class="col-lg-8 col-xl-9 col-sm-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Crypt Marketing Values</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table border table-bordered mb-0">
												<thead>
													<tr>
														<th>No</th>
														<th>Icon</th>
														<th>Currency</th>
														<th>Price</th>
														<th>Market Cap</th>
														<th>Volume 1D</th>
														<th>Change % (1D)</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/bitcoin.svg')}}" class="w-4 h-4" alt=""></td>
														<td>Bitcoin</td>
														<td>$ 10513.00</td>
														<td>$ 51,191,183,730</td>
														<td>$ 10,133,400,000</td>
														<td><span class="badge badge-gradient-info"> 0.66%</span></td>

													</tr>
													<tr>
														<td>2</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/ethereum.svg')}}" class="w-4 h-4" alt=""></td>
														<td>Ethereum</td>
														<td>$ 425.25</td>
														<td>$ 4,48,308,110</td>
														<td>$ 193,430,000</td>
														<td><span class="badge  badge-primary"> 0.64%</span></td>
													</tr>
													<tr>
														<td>3</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/ripple.svg')}}" class="w-4 h-4" alt=""></td>
														<td>Ripple</td>
														<td>$ 1.2029</td>
														<td>$ 7,63,80,043</td>
														<td>$ 42,677,430,000</td>
														<td><span class="badge  badge-gradient-success"> 0.79%</span></td>
													</tr>
													<tr>
														<td>3</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/bitcoincash.svg')}}" class="w-4 h-4" alt=""></td>
														<td>Bitcoincash</td>
														<td>$ 1547.67</td>
														<td>$ 6,14,18,730</td>
														<td>$ 40,13,40,000</td>
														<td><span class="badge  badge-gradient-warning"> 0.32%</span></td>
													</tr>
													<tr>
														<td>4</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/nem.svg')}}" class="w-4 h-4" alt=""></td>
														<td>Nem</td>
														<td>$ 723.48</td>
														<td>$ 19,07,67,295</td>
														<td>$ 17,99,90,000</td>
														<td><span class="badge  badge-gradient-info"> 6.26%</span></td>
													</tr>
													<tr>
														<td>5</td>
														<td><img src="{{URL::asset('assets/images/crypto-currencies/neo.svg')}}" class="w-4 h-4" alt=""></td>
														<td>Neo</td>
														<td>$ 149.18</td>
														<td>$ 8,44,49,000</td>
														<td>$ 7,10,10,000</td>
														<td><span class="badge  badge-gradient-danger"> 36.98%</span></td>
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
<script src="{{URL::asset('assets/plugins/echarts/echarts.js')}}"></script>
<!-- c3.js Charts Plugin -->
<script src="{{URL::asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/charts-c3/c3-chart.js')}}"></script>
<!-- Input Mask Plugin -->
<script src="{{URL::asset('assets/plugins/input-mask/jquery.mask.min.js')}}"></script>
<!-- Index Scripts -->
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/js/index2-dark.js')}}"></script>
<!-- peitychart -->
<script src="{{URL::asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>
@endsection