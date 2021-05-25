@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<div class="page-header">
							<h4 class="page-title">Thumbnails</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Thumbnails</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Thumbnails</h3>
									</div>
									<div class="card-body h-100">
										<div class="row mt-4">
											<div class="col-xs-6 col-md-3">
												<a href="#" class="thumbnail ">
													<img src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="thumb1" class="thumbimg">
												</a>
											</div>
											<div class="col-xs-6 col-md-3">
												<a href="#" class="thumbnail">
													<img src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="thumb1" class="thumbimg">
												</a>
											</div>
											<div class="col-xs-6 col-md-3">
												<a href="#" class="thumbnail">
													<img src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="thumb1" class="thumbimg">
												</a>
											</div>
											<div class="col-xs-6 col-md-3">
												<a href="#" class="thumbnail">
													<img src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="thumb1" class="thumbimg">
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Custom content Thumbnails</h3>
									</div>
									<div class="card-body h-100">
										<div class="row mt-4">
											<div class="col-xs-6 col-md-4">
												<div class="thumbnail">
													<a href="#">
														<img src="{{URL::asset('assets/images/photos/19.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
													<div class="caption">
														<h4><strong>Thumbnail label</strong></h4>
														<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
														<p>
															<a href="#" class="btn btn-primary" role="button">Button</a>
															<a href="#" class="btn btn-secondary" role="button">Button</a>
														</p>
													</div>
												</div>
											</div>
											<div class="col-xs-6 col-md-4">
												<div class="thumbnail">
													<a href="#">
														<img src="{{URL::asset('assets/images/photos/20.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
													<div class="caption">
														<h4><strong>Thumbnail label</strong></h4>
														<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
														<p>
															<a href="#" class="btn btn-primary" role="button">Button</a>
															<a href="#" class="btn btn-secondary" role="button">Button</a>
														</p>
													</div>
												</div>
											</div>
											<div class="col-xs-6 col-md-4">
												<div class="thumbnail">
													<a href="#">
														<img src="{{URL::asset('assets/images/photos/21.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
													<div class="caption">
														<h4><strong>Thumbnail label</strong></h4>
														<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
														<p>
															<a href="#" class="btn btn-primary" role="button">Button</a>
															<a href="#" class="btn btn-secondary" role="button">Button</a>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Custom content Thumbnails</h3>
									</div>
									<div class="card-body h-100">
										<div class="row mt-4">
											<div class="col-xs-12 col-md-6 col-lg-3">
												<div class="thumbnail">
													<a href="#">
														<img src="{{URL::asset('assets/images/photos/22.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
													<div class="caption">
														<h4><strong>Thumbnail label</strong></h4>
														<p>sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-md-6 col-lg-3">
												<div class="thumbnail">
													<a href="#">
														<img src="{{URL::asset('assets/images/photos/23.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
													<div class="caption">
														<h4><strong>Thumbnail label</strong></h4>
														<p>sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-md-6 col-lg-3">
												<div class="thumbnail">
													<div class="caption">
														<h4><strong>Thumbnail label</strong></h4>
														<p>sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
													</div>
													<a href="#">
														<img src="{{URL::asset('assets/images/photos/24.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
												</div>
											</div>
											<div class="col-xs-12 col-md-6 col-lg-3">
												<div class="thumbnail">
													<div class="caption">
														<h4><strong>Thumbnail label</strong></h4>
														<p>sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
													</div>
													<a href="#">
														<img src="{{URL::asset('assets/images/photos/25.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
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
@endsection