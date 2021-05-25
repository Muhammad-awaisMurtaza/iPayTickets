@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<div class="page-header">
							<h4 class="page-title">About</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">About Us</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row ">
							<div class="col-md-3 features">
								<div class="card-counter primary shadow-primary">
								    <div>
										<i class="fa fa-user"></i>
										<span class="count-numbers counter text-white">2569</span>
										<span class="count-name text-white">Employee's</span>

								    </div>
								</div>
							</div>

							<div class="col-md-3 features">
								<div class="card-counter secondary shadow-secondary">
								    <div>
										<i class="fa fa-usd"></i>
										<span class="count-numbers counter text-white">4,6571</span>
										<span class="count-name text-white">Profit</span>
								    </div>
								</div>
							</div>

							<div class="col-md-3 features">
								<div class="card-counter info shadow-info">
								    <div>
										<i class="fa fa-line-chart"></i>
										<span class="count-numbers counter text-white">5,8734</span>
										<span class="count-name text-white">Growth</span>
								    </div>
								</div>
							</div>

							<div class="col-md-3 features">
								<div class="card-counter success shadow-success">
								    <div>
										<i class="fa fa-briefcase"></i>
										<span class="count-numbers counter text-white">3,564</span>
										<span class="count-name text-white">Projects</span>
								    </div>
								</div>
							</div>
						</div>

						<div >
							<div class="card">
								<div class=" h-100">
									<div class="row">
										<div class="col-md-12 col-lg-6 pr-0 d-none d-lg-block">
											<img src="{{URL::asset('assets/images/thumbnails/thumb1.jpg')}}" alt="img" class="br-tl-7 br-bl-7 ">
										</div>
										<div class="col-md-12 col-lg-6  pl-0 ">
											<div class="card-body p-7 about-con pabout h-100">
												<h2 class="mb-4 font-weight-semibold">Why Adminor ?</h2>
												<h4 class="leading-normal">majority have suffered alteration in some form, by injected humour</h4>
												<p class="leading-normal">There are many variations of passages of Lorem Ipsum available, but the majority have suffered  by injected humour, or randomised words which don't look even slightly believable.
												If you are going to use a passage of Lorem Ipsum, you need to as necessary All the Lorem Ipsum generators on the Internet tend to repeat</p>
												<a href="#" class="btn btn-primary  mt-2">View More</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12 col-lg-3">
									<div class="card text-center">
										<img src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="img" class="br-tl-7 br-tr-7 card-about-img" >
										<div class="card-body h-100">
											<h3 class="mb-3">Company history</h3>
											<p>I must explain to you how all this mistaken idea of denouncing pleasure and you a complete account of the system</p>
											<a href="#" class="btn btn-primary">-Read More</a>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 col-lg-3">
									<div class="card text-center">
										<img src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="img" class="br-tl-7 br-tr-7 card-about-img" >
										<div class="card-body h-100">
											<h3 class="mb-3">About Team</h3>
											<p>I must explain to you how all this mistaken idea of denouncing pleasure and you a complete account of the system</p>
											<a href="#" class="btn btn-secondary">-Read More</a>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 col-lg-3">
									<div class="card text-center">
										<img src="{{URL::asset('assets/images/photos/6.jpg')}}" alt="img" class="br-tl-7 br-tr-7 card-about-img" >
										<div class="card-body h-100">
											<h3 class="mb-3">Company growth</h3>
											<p>I must explain to you how all this mistaken idea of denouncing pleasure and you a complete account of the system</p>
											<a href="#" class="btn btn-info">-Read More</a>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 col-lg-3">
									<div class="card text-center">
										<img src="{{URL::asset('assets/images/photos/7.jpg')}}" alt="img" class="br-tl-7 br-tr-7 card-about-img" >
										<div class="card-body h-100">
											<h3 class="mb-3">Our Statistics</h3>
											<p>I must explain to you how all this mistaken idea of denouncing pleasure and you a complete account of the system</p>
											<a href="#" class="btn btn-success">-Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="h-100">
									<div class="row">
										<div class="col-md-12 col-lg-6  pr-0 ">
											<div class="card-body p-7 pabout h-100">
												<h2 class="mb-4 font-weight-semibold">What is Our Services?</h2>
												<h4 class="leading-normal">majority have suffered alteration in some form, by injected humour</h4>
												<p class="leading-normal">There are many variations of passages of Lorem Ipsum available, but the majority have suffered  by injected humour, or randomised words which don't look even slightly believable.
												If you are going to use a passage of Lorem Ipsum, you need to as necessary All the Lorem Ipsum generators on the Internet tend to repeat</p>
												<a href="#" class="btn btn-primary mt-2">View More</a>
											</div>
										</div>
										<div class="col-md-12 col-lg-6 pl-0 d-none d-lg-block">
											<img src="{{URL::asset('assets/images/thumbnails/thumb4.jpg')}}" alt="img" class=" br-br-7 br-tr-7">
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
<!--Counters -->
<script src="{{URL::asset('assets/plugins/counters/counterup.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/counters/waypoints.min.js')}}"></script>
@endsection