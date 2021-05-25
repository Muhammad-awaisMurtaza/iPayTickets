@extends('layouts.master')
@section('css')
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">DropDowns</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">DropDowns</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row row-deck">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Single button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Split button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-default">Action</button>
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="pull-right fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-primary">Action</button>
													<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="pull-right fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-success">Action</button>
													<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="pull-right fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-info">Action</button>
													<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="pull-right fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-warning">Action</button>
													<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="pull-right fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-danger">Action</button>
													<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="pull-right fa fa-angle-up"></b>
														</li>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Dropup variation</h3>
									</div>
									<div class="card-body">
										<div class="dropup btn-group ">
											<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropup1
												<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">HTML</a></li>
												<li><a href="#">CSS</a></li>
												<li><a href="#">JavaScript</a></li>
												<li class="divider"></li>
												<li><a href="#">About Us</a></li>
											</ul>
										</div>
										<!-- Split dropup button -->
										<div class="dropup btn-group ">
											<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Dropup2
												<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="#">HTML</a></li>
												<li><a href="#">CSS</a></li>
												<li><a href="#">JavaScript</a></li>
												<li class="divider"></li>
												<li><a href="#">About Us</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Dropdown with Media List</h3>
									</div>
									<div class="card-body  h-100">
										<div class="dropdown dropdown-demo show">
											<a href="#" class="btn btn-primary mb-2">
												<span>View Messages</span>
												<i class="fa fa-angle-down ml-5"></i>
											</a>
											<div class="dropdown-menu dropdown-media-list show">
												<div class="dropdown-menu-header">
													<label>Messages</label>
													<a href="" class="tx-12">+ Add New Message</a>
												</div><!-- d-flex -->

												<div >
													<a href="" class="media align-items-center m-0">
														<img src="{{URL::asset('assets/images/faces/female/15.jpg')}}" alt="">
														<div class="media-body">
															<div>
																<p>Robert Walker</p>
																<span>5 hours ago</span>
															</div><!-- d-flex -->
															<p>I should be incapable of drawing a single stroke at the present moment...</p>
														</div>
													</a><!-- media -->
													<div class="dropdown-list-footer bd-t">
														<a href="#" class="text-primary"><span class="pr-1 pt-1"> Show All Messages</span><i class="fa fa-angle-down mg-r-5"></i></a>
													</div>
												</div><!-- media-list -->
											</div><!-- dropdown-menu -->
										</div><!-- dropdown -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
@section('js')
@endsection