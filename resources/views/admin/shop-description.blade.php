@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<div class="page-header">
							<h4 class="page-title">Store</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Store</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row row-cards">
							<div class="col-lg-12 col-md-12 ">
								<div class="card m-b-20">
									<div class="card-body">
										<div class="bg-light-gray p-6 text-center">
											<img  alt="Product" src="{{URL::asset('assets/images/products/4.png')}}">
										</div>
										<div class="text-center mt-4">
											<a href="#" class="btn btn-sm btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
											<a href="#" class="btn btn-sm btn-success"><i class="fa fa-shopping-cart"></i> Buy Now</a>
										</div>
										<div class="border mt-4 mb-4">
											<h4 class="m-b-0 m-t-20">Description</h4>
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
											<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
										</div>
										<h4 class="mb-4">Specifications</h4>
										<div class="pro_detail border p-4">
											<h5 class="m-l-0 m-t-10">General</h5>
											<ul class="list-unstyled mb-0 border-bottom-0">
												<li class="row border-bottom-0">
													<div class="col-sm-3 text-muted mb-2">Brand</div>
													<div class="col-sm-3 mb-2">Fas-track</div>
												</li>
												<li class=" row border-bottom-0">
													<div class="col-sm-3 text-muted mb-2">Model Number</div>
													<div class="col-sm-3 mb-2">RDF016</div>
												</li>
												<li class="p-b-20 row border-bottom-0">
													<div class="col-sm-3 text-muted mb-2">Model Name</div>
													<div class="col-sm-3 mb-2">RS10</div>
												</li>
												<li class="p-b-20 row border-bottom-0">
													<div class="col-sm-3 text-muted mb-2">Suitable For</div>
													<div class="col-sm-3 mb-2">Men, Women</div>
												</li>
												<li class="p-b-20 row border-bottom-0">
													<div class="col-sm-3 text-muted mb-2">Material</div>
													<div class="col-sm-3 mb-2">Leather</div>
												</li>
												<li class="p-b-20 row border-bottom-0">
													<div class="col-sm-3 text-muted">Color</div>
													<div class="col-sm-3">Black</div>
												</li>
											</ul>
										</div>
										<div class="pro_detail border p-4 border-top-0">
											<h5 class="m-l-0 m-t-0">Dimensions</h5>
											<ul class="list-unstyled mb-0 ">
												<li class="row border-bottom-0">
													<div class="col-sm-3 text-muted mb-2">Width</div>
													<div class="col-sm-3 mb-2">3 inch</div>
												</li>
												<li class="p-b-20 row border-bottom-0">
													<div class="col-sm-3 text-muted mb-2">Works</div>
													<div class="col-sm-3 mb-2">Alarm, Digital counter</div>
												</li>
												<li class="p-b-20 row border-bottom-0">
													<div class="col-sm-3 text-muted mb-2">Warranty</div>
													<div class="col-sm-3 mb-2">3 yrs</div>
												</li>
												<li class="p-b-20 row border-bottom-0">
													<div class="col-sm-3 text-muted ">Others</div>
													<div class="col-sm-3 "> Pulse Measurement</div>
												</li>
											</ul>
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