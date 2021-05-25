@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<div class="page-header">
							<h4 class="page-title">Widgets</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Ui Design</a></li>
								<li class="breadcrumb-item active" aria-current="page">Widgets</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-3">
								<div class="card widgets-cards bg-primary">
									<div class="card-body d-flex justify-content-center align-items-center">
										<div class="chart-circle chart-circle-sm mr-5" data-value="0.62" data-thickness="6" data-color="#ca8411"><canvas width="64" height="64"></canvas><div class="chart-circle-value text-white">70%</div></div>
										<div class="wrp text-wrapper text-white">
											<p class="mt-3">$8758</p>
											<p class="mt-1">This Week Orders</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-3 ">
								<div class="card widgets-cards bg-success">
									<div class="card-body d-flex justify-content-center align-items-center">
										<div class="chart-circle chart-circle-sm mr-5" data-value="0.42" data-thickness="6" data-color="#2b9146"><canvas width="64" height="64"></canvas><div class="chart-circle-value text-white">42%</div></div>
										<div class="wrp text-wrapper text-white">
											<p class="mt-3">7847</p>
											<p class=" mt-1">This Week Earnings</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-3 ">
								<div class="card widgets-cards bg-secondary">
									<div class="card-body d-flex justify-content-center align-items-center">
										<div class="chart-circle chart-circle-sm mr-5" data-value="0.37" data-thickness="6" data-color="#f66b4e"><canvas width="64" height="64"></canvas><div class="chart-circle-value text-white">17%</div></div>
										<div class="wrp text-wrapper text-white">
											<p class="mt-3">6477</p>
											<p class=" mt-1">This Week Views</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-3 ">
								<div class="card widgets-cards bg-info">
									<div class="card-body d-flex justify-content-center align-items-center">
										<div class="chart-circle chart-circle-sm mr-5" data-value="0.42" data-thickness="6" data-color="#3578d5"><canvas width="64" height="64"></canvas><div class="chart-circle-value text-white">37%</div></div>
										<div class="wrp text-wrapper text-white">
											<p class="mt-3">345</p>
											<p class=" mt-1">This Week Comments</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-3 col-md-6">
								<div class="card card-img-holder text-default bg-color">
									<div class="row">
										<div class="col-4">
											<div class="circle-icon bg-primary text-center align-self-center shadow-primary"><img src="{{URL::asset('assets/images/circle.svg')}}" class="card-img-absolute"><i class= "lnr lnr-user fs-30  text-white mt-4"></i></div>
										</div>
										<div class="col-8">
											<div class="card-body p-4">
												<h1 class="mb-3">17,533</h1>
												<h5 class="font-weight-normal mb-0">Followers</h5>
											</div>
									    </div>
								    </div>
							   </div>
							</div>
							<div class="col-sm-12 col-lg-3 col-md-6">
								<div class="card card-img-holder text-default">
									<div class="row">
										<div class="col-4">
											<div class="card-img-absolute circle-icon bg-secondary align-items-center text-center shadow-warning"><img src="{{URL::asset('assets/images/circle.svg')}}" class="card-img-absolute"><i class= "lnr lnr-heart fs-30 text-white mt-4"></i></div>
										</div>
										<div class="col-8">
											<div class="card-body p-4">
													<h1 class="mb-3">10,257</h1>
													<h5 class="font-weight-normal mb-0">Likes</h5>
											</div>
									    </div>
								    </div>
							   </div>
							</div>

							<div class="col-sm-12 col-lg-3 col-md-6">
								<div class="card card-img-holder text-default">
									<div class="row">
										<div class="col-4">
											<div class="card-img-absolute  circle-icon bg-info align-items-center text-center shadow-info"><img src="{{URL::asset('assets/images/circle.svg')}}" class="card-img-absolute"><i class= "lnr lnr-bubble fs-30 text-white mt-4"></i></div>
										</div>
										<div class="col-8">
											<div class="card-body p-4">
													<h1 class="mb-3">87</h1>
													<h5 class="font-weight-normal mb-0">Comments</h5>
											</div>
									    </div>
								    </div>
							   </div>
							</div>

							<div class="col-sm-12 col-lg-3 col-md-6">
								<div class="card card-img-holder text-default">
									<div class="row">
										<div class="col-4">
											<div class="card-img-absolute circle-icon bg-success align-items-center text-center shadow-success"><img src="{{URL::asset('assets/images/circle.svg')}}" class="card-img-absolute"><i class= " lnr lnr-envelope fs-30 text-white mt-4 "></i></div>
										</div>
										<div class="col-8">
											<div class="card-body p-4">
												<h1 class="mb-3">485</h1>
												<h5 class="font-weight-normal mb-0">Posts</h5>
											</div>
									    </div>
								    </div>
							   </div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-4 ">
								<div class="card">
									<div class="card-header border-bottom">
										<h5 class="card-title">Sales Summary</h5>
									</div>
									<div class="card-body">
										<div class="clearfix row border-bottom p-1">
											<div class="col">
												<div >
													<div class="float-left">
														<h5><strong>Total Revenue</strong></h5>
														<h6>weekly profit</h6>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="float-right">
												  <h4 class="font-weight-semibold label-medium-size mt-4 mb-0 text-primary">$15300</h4>
												</div>
											</div>
										</div>

										<div class="clearfix row mt-3 border-bottom p-1">
											<div class="col">
												<div >
													<div class="float-left">
														<h5><strong>Total Tax</strong></h5>
														<h6>weekly profit</h6>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="float-right">
												  <h4 class="font-weight-semibold label-medium-size mt-4 mb-0 text-success">$1625</h4>
												</div>
											</div>
										</div>

										<div class="clearfix row mt-3 border-bottom p-1">
											<div class="col">
												<div >
													<div class="float-left">
														<h5><strong>Total Income</strong></h5>
														<h6>weekly profit</h6>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="float-right">
												  <h4 class="font-weight-semibold label-medium-size mt-4 mb-0 text-warning">70%</h4>
												</div>
											</div>
										</div>

										<div class="clearfix row mt-3 p-1">
											<div class="col">
												<div >
													<div class="float-left">
														<h5><strong>Total Loss</strong></h5>
														<h6>weekly loss</h6>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="float-right">
												  <h4 class="font-weight-semibold label-medium-size mt-4 mb-0 text-secondary">30%</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-12">
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

							<div class="col-lg-4 col-sm-12 p-l-0 p-r-0 col-md-12">
								<div class="card">
									<div class="card-header text-center">
										<h2 class="card-title">Projects</h2>
									</div>
									<div class="card-body">
										<div class="mx-auto chart-circle chart-circle-md mt-3 mb-4 text-center" data-value="0.75" data-thickness="8" data-color="#6b3e9e">
											<div class="chart-circle-value fs"><small>Total Sales</small><span class="mt-1">4.3K<span></div>
										</div>
										<div class="text-center">
											<h5 >Average Sales</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam velit quisquam veniam excepturi.</p>
											<div class="col p-1">
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


							<div class="col-lg-8">
								<div class="card">
									<div class="card-header">
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

							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div >
										<div class="weather-card one">
											<div class="top">
												<div class="wrapper">
													<div class="mynav">
														<a href="javascript:;"><span class="lnr lnr-chevron-left"></span></a>
														<a href="javascript:;"><span class="lnr lnr-cog"></span></a>
													</div>
													<h1 class="heading">Clear night</h1>
													<h3 class="location">Toronto, Canada</h3>
													<p class="temp">
														<span class="temp-value">30</span>
														<span class="deg">0</span>
														<a href="javascript:;"><span class="temp-type">C</span></a>
													</p>
												</div>
											</div>
											<div class="bottom">
												<div class="wrapper">
													<ul class="forecast">
														<a href="javascript:;"><span class="lnr lnr-chevron-up go-up"></span></a>
														<li class="active">
															<span class="date">Yesterday</span>
															<span class="lnr lnr-sun condition">
																<span class="temp">28<span class="deg">0</span><span class="temp-type">C</span></span>
															</span>
														</li>
														<li>
															<span class="date">Tomorrow</span>
															<span class="lnr lnr-cloud condition">
																<span class="temp">32<span class="deg">0</span><span class="temp-type">C</span></span>
															</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row row-deck">
							<div class="col-md-12 col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h2 class="card-title">Chat</h2>
									</div>
									<div class="card-body h-100">
										<article class="media event">
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
										</article>
										<article class="media event">
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
										</article>
										<article class="media event">
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
										</article>
										<article class="media event">
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
										</article>
										<article class="media event ">
											<a class="pull-left message-avatar mb-1">
												<img src="{{URL::asset('assets/images/faces/male/28.jpg')}}" alt="">
											</a>
											<div class="media-body">
												<div class="pull-left">
													<a class="title" href="#">Dewayne Petrone</a>
													<p>Via Facebook</p>
												</div>
												<div class="pull-right">
													<p class="text-info mb-0"><i class="fa fa-eye mr-2"></i>342</p>
													<p class="text-muted">02:42 pm</p>
												</div>
											</div>
										</article>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Top Countries</h3>
									</div>
									<div class="card-body h-100">
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
															<div class="progress-bar bg-success" style="width: 48%"></div>
														</div>
													</td>
													<td class="text-right"><span class="text-muted">$4587</span></td>
												</tr>
												<tr>
													<td><i class="flag flag-ru mt-2"></i></td>
													<td>Russia
														<div class="progress progress-xs mt-2">
															<div class="progress-bar bg-primary" style="width: 35%"></div>
														</div>
													</td>
													<td class="text-right"><span class="text-muted">$2520</span></td>
												</tr>
												<tr>
													<td><i class="flag flag-in mt-2"></i></td>
													<td>India
														<div class="progress progress-xs mt-2">
															<div class="progress-bar bg-warning" style="width: 35%"></div>
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
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<a href="#"><img class="card-img-top br-tl-7 br-tr-7" src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="And this isn't my nose. This is a false one."></a>
									<div class="card-body h-100">
										<h4><a href="#">Best grow thing Company.</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar brround avatar-md mr-3" style="background-image: url({{URL::asset('assets/images/faces/female/8.jpg')}})"></div>
											<div>
												<a href="profile.html" class="text-default">Jevan Peters</a>
												<small class="d-block text-muted">1 days ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up mr-1"></i></a>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-message-square mr-1"></i></a>
											</div>
											<div class="ml-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-share-2 mr-1"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row row-deck">
						  	<div class="col-lg-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Skill Set</div></div>
										<div class="card-body mt-0 h-100">
											<div class="chats-wrap media-list">
											<div class="chat-details mb-1 p-3">
												<h4 class="mb-0">
													<span class="h5 font-weight-normal">Html</span>
													<span class="float-right p-1  btn btn-sm text-default">
													<b>85</b>%</span>
												</h4>
												<div class="progress progress-sm mt-3">
													<div class="progress-bar  bg-primary" style="width: 85%"></div>
												</div>
											</div>
											<div class="chat-details mb-1 p-3">
												<h4 class="mb-0">
													<span class="h5 font-weight-normal"> Wordpress</span>
													<span class="float-right p-1  btn btn-sm text-default">
													<b>46</b>%</span>
												</h4>
												<div class="progress progress-sm mt-3">
													<div class="progress-bar bg-info" style="width: 46%"></div>
												</div>
											</div>
											<div class="chat-details mb-1 p-3">
												<h4 class="mb-0">
													<span class="h5 font-weight-normal"> jQuery</span>
													<span class="float-right p-1  btn btn-sm text-default">
													<b>56</b>%</span>
												</h4>
												<div class="progress progress-sm mt-3">
													<div class="progress-bar bg-secondary" style="width: 56%"></div>
												</div>
											</div>
											<div class="chat-details mb-1 p-3">
												<h4 class="mb-0">
													<span class="h5 font-weight-normal"> Photoshop</span>
													<span class="float-right p-1  btn btn-sm text-default">
													<b>90</b>%</span>
												</h4>
												<div class="progress progress-sm mt-3">
													<div class="progress-bar bg-success-gradient" style="width: 90%"></div>
												</div>
											</div>
											<div class="chat-details mb-1 p-3">
												<h4 class="mb-0">
													<span class="h5 font-weight-normal">Angular js</span>
													<span class="float-right p-1  btn btn-sm text-default">
													<b>30</b>%</span>
												</h4>
												<div class="progress progress-sm mt-3">
													<div class="progress-bar bg-danger" style="width: 30%"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-lg-8">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Best Pictures for Today</h3>
									</div>
									<div class="card-body p-2 h-100">
										<div>
											<div class="row img-gallery">
												<div class="col-4">
													<a href="javascript:void(0)" class="d-block link-overlay">
														<img class="d-block img-fluid rounded" src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="">
														<span class="link-overlay-bg rounded">
															<i class="fa fa-search"></i>
														</span>
													</a>
												</div>
												<div class="col-4">
													<a href="javascript:void(0)" class="d-block link-overlay">
														<img class="d-block img-fluid rounded" src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="">
														<span class="link-overlay-bg rounded">
															<i class="fa fa-search"></i>
														</span>
													</a>
												</div>
												<div class="col-4">
													<a href="javascript:void(0)" class="d-block link-overlay">
														<img class="d-block img-fluid rounded" src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="">
														<span class="link-overlay-bg rounded">
															<i class="fa fa-search"></i>
														</span>
													</a>
												</div>
												<div class="col-4">
													<a href="javascript:void(0)" class="d-block link-overlay">
														<img class="d-block img-fluid rounded" src="{{URL::asset('assets/images/photos/4.jpg')}}" alt="">
														<span class="link-overlay-bg rounded">
															<i class="fa fa-search"></i>
														</span>
													</a>
												</div>
												<div class="col-4">
													<a href="javascript:void(0)" class="d-block link-overlay">
														<img class="d-block img-fluid rounded" src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="">
														<span class="link-overlay-bg rounded">
															<i class="fa fa-search"></i>
														</span>
													</a>
												</div>
												<div class="col-4">
													<a href="javascript:void(0)" class="d-block link-overlay">
														<img class="d-block img-fluid rounded" src="{{URL::asset('assets/images/photos/6.jpg')}}" alt="">
														<span class="link-overlay-bg rounded">
															<i class="fa fa-search"></i>
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-12 m-b-3">
								<div class="card">
									<div >
										<div class="row">
											<div class="col-12">
												<div class="facebook p-4 br-tl-7 br-tr-7">
													<div class="text-center text-white social">
														<i class="fa fa-facebook"></i>
													</div>
												</div>
												<div class="card-body mt-0">
													<div class="d-flex  align-items-center">
														<div><h3 class="font-medium">56k</h3>
															<h5 class="text-muted mb-0">Following</h5>
														</div>
														<div class="ml-auto">
															<h3 class="font-medium">17k</h3>
															<h5 class="text-muted mb-0">Friends</h5>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12 m-b-3">
								<div class="card">
									<div >
										<div class="row">
											<div class="col-12">
												<div class="twitter p-4 br-tl-7 br-tr-7">
													<div class="text-center text-white social">
														<i class="fa fa-twitter"></i>
													</div>
												</div>
												<div class="card-body mt-0">
													<div class="d-flex  align-items-center">
														<div><h3 class="font-medium">86k</h3>
															<h5 class="text-muted mb-0">Following</h5>
														</div>
														<div class="ml-auto">
															<h3 class="font-medium">20k</h3>
															<h5 class="text-muted mb-0">Friends</h5>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12 m-b-3">
								<div class="card">
									<div >
										<div class="row">
											<div class="col-12">
												<div class="linkedin p-4 br-tl-7 br-tr-7">
													<div class="text-center text-white social">
														<i class="fa fa-linkedin"></i>
													</div>
												</div>
												<div class="card-body mt-0">
													<div class="d-flex  align-items-center">
														<div><h3 class="font-medium">76k</h3>
															<h5 class="text-muted mb-0">Following</h5>
														</div>
														<div class="ml-auto">
															<h3 class="font-medium">27k</h3>
															<h5 class="text-muted mb-0">Friends</h5>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12 m-b-3">
								<div class="card">
									<div >
										<div class="row">
											<div class="col-12">
												<div class="instagram p-4 br-tl-7 br-tr-7">
													<div class="text-center text-white social">
														<i class="fa fa-instagram"></i>
													</div>
												</div>
												<div class="card-body mt-0">
													<div class="d-flex  align-items-center">
														<div><h3 class="font-medium">36k</h3>
															<h5 class="text-muted mb-0">Following</h5>
														</div>
														<div class="ml-auto">
															<h3 class="font-medium">10k</h3>
															<h5 class="text-muted mb-0">Friends</h5>
														</div>
													</div>
												</div>
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
<!-- c3.js Charts Plugin -->
<script src="{{URL::asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/charts-c3/c3-chart.js')}}"></script>
<!-- Input Mask Plugin -->
<script src="{{URL::asset('assets/plugins/input-mask/jquery.mask.min.js')}}"></script>
<!-- Index Scripts -->
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script>
		$(function(){
		   if ($('#ms-menu-trigger')[0]) {
				$('body').on('click', '#ms-menu-trigger', function() {
					$('.ms-menu').toggleClass('toggled');
				});
			}
		});
</script>
@endsection