@extends('layouts.master')
@section('css')
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">Carousel</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Carousel</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel</h3>
									</div>
									<div class="card-body h-100">
										<div id="carousel-default" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/19.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/20.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/21.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/22.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/23.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with indicators</h3>
									</div>
									<div class="card-body h-100">
										<div id="carousel-indicators" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators  ">
												<li data-target="#carousel-indicators" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators" data-slide-to="1" ></li>
												<li data-target="#carousel-indicators" data-slide-to="2" ></li>
												<li data-target="#carousel-indicators" data-slide-to="3" ></li>
												<li data-target="#carousel-indicators" data-slide-to="4" ></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/24.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/25.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/1.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/2.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/3.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with controls</h3>
									</div>
									<div class="card-body h-100">
										<div id="carousel-controls" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/4.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/5.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/6.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/7.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/8.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
											<a class="carousel-control-prev" href="#carousel-controls" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carousel-controls" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with captions</h3>
									</div>
									<div class="card-body h-100">
										<div id="carousel-captions" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/9.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/10.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/11.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/12.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/13.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
											</div>
											<a class="carousel-control-prev" href="#carousel-captions" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carousel-captions" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with top controls</h3>
									</div>
									<div class="card-body h-100">
										<div id="carousel-indicators1" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators  carousel-indicators1">
												<li data-target="#carousel-indicators1" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators1" data-slide-to="1" ></li>
												<li data-target="#carousel-indicators1" data-slide-to="2" ></li>
												<li data-target="#carousel-indicators1" data-slide-to="3" ></li>
												<li data-target="#carousel-indicators1" data-slide-to="4" ></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/14.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/15.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/16.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/17.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/18.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with top-right controls</h3>
									</div>
									<div class="card-body h-100">
										<div id="carousel-indicators2" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators  carousel-indicators2">
												<li data-target="#carousel-indicators2" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators2" data-slide-to="1" ></li>
												<li data-target="#carousel-indicators2" data-slide-to="2" ></li>
												<li data-target="#carousel-indicators2" data-slide-to="3" ></li>
												<li data-target="#carousel-indicators2" data-slide-to="4" ></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/19.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/20.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/21.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/22.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/23.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with top-left controls</h3>
									</div>
									<div class="card-body h-100">
										<div id="carousel-indicators3" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators  carousel-indicators3">
												<li data-target="#carousel-indicators3" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators3" data-slide-to="1" ></li>
												<li data-target="#carousel-indicators3" data-slide-to="2" ></li>
												<li data-target="#carousel-indicators3" data-slide-to="3" ></li>
												<li data-target="#carousel-indicators3" data-slide-to="4" ></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/24.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/25.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/1.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/2.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/3.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with bottom-right controls</h3>
									</div>
									<div class="card-body h-100">
										<div id="carousel-indicators4" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators  carousel-indicators4">
												<li data-target="#carousel-indicators4" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators4" data-slide-to="1" ></li>
												<li data-target="#carousel-indicators4" data-slide-to="2" ></li>
												<li data-target="#carousel-indicators4" data-slide-to="3" ></li>
												<li data-target="#carousel-indicators4" data-slide-to="4" ></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/4.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/5.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/6.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/7.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/8.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with bottom-left controls</h3>
									</div>
									<div class="card-body h-100">
										<div id="carousel-indicators5" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators  carousel-indicators5">
												<li data-target="#carousel-indicators5" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators5" data-slide-to="1" ></li>
												<li data-target="#carousel-indicators5" data-slide-to="2" ></li>
												<li data-target="#carousel-indicators5" data-slide-to="3" ></li>
												<li data-target="#carousel-indicators5" data-slide-to="4" ></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/9.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/10.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/11.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/12.jpg')}}" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/13.jpg')}}" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with Background color captions</h3>
									</div>
									<div class="card-body h-100">
										<div id="carousel-captions2" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/red.jpg')}}" data-holder-rendered="true">
													<div class="carousel-caption">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/blue.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/green.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
													</div>
												</div>
											</div>
											<a class="carousel-control-prev" href="#carousel-captions2" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carousel-captions2" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with GradientBackground  caption</h3>
									</div>
									<div class="card-body h-100">
										<div id="carousel-captions1" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/gradient1.jpg')}}" data-holder-rendered="true">
													<div class="carousel-caption">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures.</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/gradient2.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="{{URL::asset('assets/images/photos/gradient3.jpg')}}" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>The wise man therefore always holds in these matters to this principle of selection he rejects pleasures.</p>
													</div>
												</div>
											</div>
											<a class="carousel-control-prev" href="#carousel-captions1" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carousel-captions1" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
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
@endsection