@extends('layouts.master')
@section('css')
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">Cards</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">UI Design</a></li>
								<li class="breadcrumb-item active" aria-current="page">Cards Design</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
						    <div class="col-md-4 col-xl-4">
								<div class="card ">
									<div class="card-header ">
										<h3 class="card-title ">Employee card</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x "></i></a>
										</div>
									</div>
									<div class="card-body text-center">
										<span class="avatar avatar-xxl brround" style="background-image: url({{URL::asset('assets/images/faces/male/18.jpg')}})"></span>
										<h4 class="h4 mb-0 mt-3">James Thomas</h2>
										<p class="card-text">Web designer</p>
									</div>
									<div class="card-footer text-center">
										<div class="row user-social-detail">
											<div class="col-lg-4 col-sm-4 col-4">
												<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											</div>
											<div class="col-lg-4 col-sm-4 col-4">
												<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
											</div>
											<div class="col-lg-4 col-sm-4 col-4">
												<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-xl-4">
								<div class="card ">
									<div class="card-header ">
										<h3 class="card-title ">Employee card</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x "></i></a>
										</div>
									</div>
									<div class="card-body text-center">
										<span class="avatar avatar-xxl brround" style="background-image: url({{URL::asset('assets/images/faces/female/18.jpg')}})"></span>
										<h4 class="h4 mb-0 mt-3">Rebacca Thomas</h2>
										<p class="card-text">Web designer</p>
									</div>
									<div class="card-footer text-center">
										<div class="row user-social-detail">
											<div class="col-lg-4 col-sm-4 col-4">
												<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											</div>
											<div class="col-lg-4 col-sm-4 col-4">
												<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
											</div>
											<div class="col-lg-4 col-sm-4 col-4">
												<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-xl-4">
								<div class="card ">
									<div class="card-header ">
										<h3 class="card-title ">Employee card</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x "></i></a>
										</div>
									</div>
									<div class="card-body text-center">
										<span class="avatar avatar-xxl brround" style="background-image: url({{URL::asset('assets/images/faces/male/8.jpg')}})"></span>
										<h4 class="h4 mb-0 mt-3"> Thomas symson</h2>
										<p class="card-text">Web designer</p>
									</div>
									<div class="card-footer text-center">
										<div class="row user-social-detail">
											<div class="col-lg-4 col-sm-4 col-4">
												<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											</div>
											<div class="col-lg-4 col-sm-4 col-4">
												<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
											</div>
											<div class="col-lg-4 col-sm-4 col-4">
												<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row row-deck">
						    <div class="col-md-4 col-xl-4">
								<div class="card ">
									<div class="card-body text-left">
										<blockquote class="quote">
											<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												<small class="text-muted">
													so awesome this title <cite title="Source Title">-magna aliqua</cite>
												</small>
										</blockquote>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-xl-4">
								<div class="card ">
									<div class="card-body text-center">
										<blockquote class="quote">
											<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												<small class="text-muted">
													so awesome this title <cite title="Source Title">-magna aliqua</cite>
												</small>
										</blockquote>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-xl-4">
								<div class="card ">
									<div class="card-body text-right">
										<blockquote class="quote">
											<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

												<small class="text-muted">
													so awesome this title <cite title="Source Title">-magna aliqua</cite>
												</small>
										</blockquote>
									</div>
								</div>
							</div>
							<div class=" col-xl-4 col-md-12 ">
								<div class="card m-b-20">
									<div class="card-header">
										<h3 class="card-title">Card With List</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body h-100">
										<div class="visitor-list">
											<div class="media m-0 mt-0 border-bottom">
												<img class="avatar brround avatar-md mr-3" alt="avatra-img" src="{{URL::asset('assets/images/faces/male/18.jpg')}}">
												<div class="media-body">
													<a href="" class="text-default font-weight-semibold">John Paige</a>
													<p class="text-muted ">Uploaded new invoices for RedBus</p>
												</div>
											</div>
											<div class="media mt-2 border-bottom">
												<img class="avatar brround avatar-md mr-3" alt="avatra-img" src="{{URL::asset('assets/images/faces/male/20.jpg')}}">
												<div class="media-body">
													<a href="" class="text-default font-weight-semibold">Lillian Quinn</a>
													<p class="text-muted">Created new work flow for the current</p>
												</div>
											</div>
											<div class="media">
												<img class="avatar brround avatar-md mr-3" alt="avatra-img" src="{{URL::asset('assets/images/faces/female/18.jpg')}}">
												<div class="media-body">
													<a href="" class="text-default font-weight-semibold">Irene Harris</a>
													<p class="text-muted mb-0">Submitted the project schedule to the manager</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12">
								<div class="card m-b-20">
									<div class="card-header">
										<h3 class="card-title">Sample card</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body  h-100">
										<p>Put toy mouse in food bowl run out of litter box at full speed drool but pee in Put toy mouse Put toy mouse the shoe purr when being pet but chew foot.</p>
										<p class="mb-0">Scratch the postman wake up lick paw Duis aute irure dolor in reprehenderit wake up owner meow meow lick plastic bags  Scratch the postman wake up lick paw wake Duis aute irure dolor  having their mate disturbing sleeping humans.</p>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12">
								<div class="card d-flex m-b-20">
									<div class="card-header">
										<h3 class="card-title">Card with Toolbar</h3>
										<div class="card-options">
											<a class="text-gray" href="javascript:void(0)">
												<i class="mdi mdi-refresh"></i>
											</a>
											<a class="text-gray" href="javascript:void(0)">
												<i class="mdi mdi-bookmark-outline"></i>
											</a>
											<a class="text-gray" href="javascript:void(0)">
												<i class="mdi mdi-dots-vertical"></i>
											</a>
										</div>
									</div>
									<div class="card-body">
										<p>Put toy mouse in food bowl run out of litter box at full speed drool but pee in Put toy mouse Put toy mouse the shoe purr when being pet but chew foot.</p>
										<p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit Scratch the postman wake up lick paw wake up owner meow meow lick plastic bags  Scratch the postman wake up lick paw wake  having their mate disturbing sleeping humans.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row row-deck">
							<div class="col-md-4 col-xl-4">
								<div class="card card-blog-overlay1">
									<div class="card-body  text-white">
										<h3 class="card-title text-white">card-with image</h3>
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
									<div class="card-footer  text-white z-index2">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md-4 col-xl-4">
								<div class="card card-blog-overlay2">
									<div class="card-body  text-white">
										<h3 class="card-title text-white">card-with image</h3>
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
									<div class="card-footer text-white z-index2">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md-4 col-xl-4">
								<div class="card card-blog-overlay">
									<div class="card-header z-index2 ">
										<h3 class="card-title text-white ">card-with image</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x text-white"></i></a>
										</div>
									</div>
									<div class="card-body  text-white">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>

							<div class="col-md-6 col-xl-6">
								<div class="card card-aside">
									<div class="card-body ">
										<h4><a href="#">Play Music</a></h4>
										<div class="text-muted">Some quick example text to build on the card title and make up the bulk of the card's</div>
										<div class="d-flex align-items-center pt-5 mt-auto text-center ">
											<div class="text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-step-backward"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-play "></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-step-forward"></i></a>
											</div>
										</div>
									</div>
									<a href="#" class="card-aside-column br-tr-7 br-br-7 w-50" style="background-image: url({{URL::asset('assets/images/photos/2.jpg')}})"></a>
								</div>
							</div>
							<div class="col-md-6 col-xl-6">
								<div class="card card-aside bg-primary">
									<div class="card-body ">
										<h4><a href="#" class="text-white">Play Music</a></h4>
										<div class="text-muted text-white">Some quick example text to build on the card title and make up the bulk of the card's </div>
										<div class="d-flex align-items-center pt-5 mt-auto text-center ">
											<div class="text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-step-backward text-white"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-play text-white "></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-step-forward text-white"></i></a>
											</div>
										</div>
									</div>
									<a href="#" class="card-aside-column br-tr-7 br-br-7 w-50" style="background-image: url({{URL::asset('assets/images/photos/20.jpg')}})"></a>
								</div>
							</div>
							<div class="col-md-4 col-xl-4">
								<div class="card text-white bg-primary">
									<div class="card-header">
										<h3 class="card-title ">primary card title</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x text-white "></i></a>
										</div>
									</div>
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-xl-4">
								<div class="card text-white bg-secondary">
									<div class="card-header ">
										<h3 class="card-title ">Secondary card title</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x text-white "></i></a>
										</div>
									</div>
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-xl-4">
								<div class="card text-white bg-success">
									<div class="card-header ">
										<h3 class="card-title ">Success card title</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x text-white "></i></a>
										</div>
									</div>
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>

							<div class="col-md-12  col-xl-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Panel with custom buttons</h3>
										<div class="card-options">
											<a href="#" class="btn btn-primary btn-sm">Action 1</a>
											<a href="#" class="btn btn-secondary btn-sm ml-2">Action 2</a>
										</div>
									</div>
									<div class="card-body">
										No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful actual teachings of the great explorer
									</div>
								</div>
							</div>
							<div class="col-md-12  col-xl-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with search form</h3>
										<div class="card-options">
											<form >
												<div class="input-group">
													<input type="text" class="form-control form-control-sm" placeholder="Search something..." name="s">
													<span class="input-group-btn ml-2">
														<button class="btn btn-sm btn-primary" type="submit">
															<span class="fe fe-search"></span>
														</button>
													</span>
												</div>
											</form>
										</div>
									</div>
									<div class="card-body">
										No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful actual teachings of the great explorer
									</div>
								</div>
							</div>
							<div class="col-md-12  col-xl-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with alert</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-alert alert alert-success mb-0">
										Adding action was successful
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-12  col-xl-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with alert</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-alert alert alert-danger mb-0">
										Adding action failed
									</div>
									<div class="card-body">
										No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful actual teachings of the great explorer
									</div>
								</div>
							</div>

							<div class="col-md-4 col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with loader</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="spinner"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4  col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with loader</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="spinner1">
											  <div class="double-bounce1"></div>
											  <div class="double-bounce2"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4  col-xl-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with loader</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div class="dimmer active">
											<div class="spinner2">
											  <div class="cube1"></div>
											  <div class="cube2"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12  col-xl-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">fullscreen button</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Card with switch</h3>
										<div class="card-options">
											<label class="custom-switch m-0">
												<input type="checkbox" value="1" class="custom-switch-input" checked>
												<span class="custom-switch-indicator"></span>
											</label>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6">
								<div class="card card-collapsed">
									<div class="card-header">
										<h3 class="card-title">Initial collapsed card</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-12  col-xl-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Built card</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>
							<div class="col-md-12  col-xl-6">
								<div class="card">
									<div class="card-status bg-blue br-tr-7 br-tl-7"></div>
									<div class="card-header">
										<h3 class="card-title">Card blue</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
									</div>
								</div>
							</div>

							<div class="col-md-12 col-xl-6">
								<div class="card">
									<div class="card-status card-status-left bg-red br-bl-7 br-tl-7"></div>
									<div class="card-header">
										<h3 class="card-title">Card status on left side</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
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