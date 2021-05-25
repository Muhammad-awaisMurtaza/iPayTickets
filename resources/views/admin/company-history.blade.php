@extends('layouts.master')
@section('css')
<link href="{{URL::asset('assets/plugins/timeline/timeline-dark.css')}}" rel="stylesheet" />
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">History</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Company History</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-md-12">
								<div>
									<div class="card-body">
										<div class="timeline">
											<div class="timeline__wrap">
												<div class="timeline__items">
													<div class="timeline__item">
														<div class="timeline__content card ">
															<div class="row">
															    <div class="col-lg-7">
																    <small class="text-muted"> 28/10/2018, 4:09</small>
																    <h2 class="text-primary">Lorem Ipsum Dolor</h2>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus.</p>
														        </div>
																 <div class="col-lg-5">
																	<img src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="" >
																</div>
														    </div>
														</div>
													</div>
													<div class="timeline__item">
														<div class="timeline__content card">
														    <div class="row">
															    <div class="col-lg-5">
																	<img src="{{URL::asset('assets/images/photos/12.jpg')}}" alt="" >
																</div>
															    <div class="col-lg-7">
																    <small class="text-muted"> 28/10/2018, 4:09</small>
																    <h2 class="text-primary">Lorem Ipsum Dolor</h2>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus.</p>
														        </div>
														    </div>
													    </div>
													</div>
													<div class="timeline__item">
														<div class="timeline__content card">
														    <small class="text-muted"> 05/11/2018, 6:12am</small>
															<h2 class="text-primary mb-3">Consectetur Adipiscing Elit</h2>
															<iframe width="100%" height="305.33" src="https://www.youtube.com/embed/EOiNe_GpcHE" frameborder="0" allow="autoplay; " allowfullscreen></iframe>
                                                        </div>
													</div>
													<div class="timeline__item">
														<div class="timeline__content card">
														    <small class="text-muted "> 08/11/2018, 4:09pm</small>
															<h2 class="text-primary">Mussum ipsum cacilds</h2>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus</p>
														    <div class="progress progress-md mt-3 mb-2">
												                 <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary-gradient" style="width: 50%">50%</div>
															</div>
														</div>
													</div>
													<div class="timeline__item ">
														<div class="timeline__content card">
														    <small class="text-muted "> 20/11/2018, 10:17pm</small>
															<h2 class="text-primary">Integer Dignissim</h2>
															<div class="row ">
															   <div class="col-12">
																	<p class="mb-3">Lorem ipsum dolor sit amet lacus dapibus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus.</p>
															   </div>
															   <div class="col-12 mb-2">
																	<img src="{{URL::asset('assets/images/photos/20.jpg')}}" alt="img" >
															   </div>
															</div>
														</div>
													</div>
													<div class="timeline__item">
														<div class="timeline__content card">
														    <small class="text-muted "> 20/10/2018, 8:23am</small>
															<h2 class="text-primary mb-3">Condimentum Lacus Dapibus</h2>
															<img src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="img">
															<p class="mt-4 mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus.</p>
														</div>
													</div>
													<div class="timeline__item">
														<div class="timeline__content card">
														    <small class="text-muted "> 25/11/2018, 3:05pm</small>
															<h2 class=" text-primary mb-3"> Voluptatem Accusantium Doloremque</h2>
															<iframe width="100%" height="305" src="https://www.youtube.com/embed/SnTFLKgALiM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
														    <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus.</p>
														</div>
													</div>
													<div class="timeline__item">
														<div class="timeline__content card">
														    <small class="text-muted mb-3"> 30/11/2018, 5:15pm</small>
															<h2 class="text-primary">Lorem Ipsum Dolor</h2>
															<img src="{{URL::asset('assets/images/photos/23.jpg')}}" alt="img" class="mb-2">
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
<!-- Timeline js -->
<script src="{{URL::asset('assets/plugins/timeline/timeline.min.js')}}"></script>
<!-- Timeline js -->
<script>
	timeline(document.querySelectorAll('.timeline'), {
		forceVerticalMode: 700,
		mode: 'vertical',
		verticalStartPosition: 'left',
		visibleItems: 4
	});
</script>
@endsection