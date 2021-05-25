@extends('layouts.master')
@section('css')
<!-- select2 Plugin -->
<link href="{{URL::asset('assets/plugins/select2/select2.min-dark.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<div class="page-header">
							<h4 class="page-title">Shop</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Shop</li>
							</ol>

						</div>
@endsection
@section('content')
						<div class="row row-cards">
							<div class="col-lg-3">
								<div class="row">
									<div class="col-md-12 col-lg-12">
										<div class="card">
											<div class="card-header">
												<div class="card-title"> Categories</div>
											</div>
											<div class="card-body">
												<div class="form-group">
													<label class="form-label mt-0">Mens</label>
													<select name="beast" id="select-beast" class="form-control select2 custom-select">
														<option value="0">--Select--</option>
														<option value="1">Foot wear</option>
														<option value="2">Top wear</option>
														<option value="3">Bootom wear</option>
														<option value="4">Men's Groming</option>
														<option value="5">Accessories</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Women</label>
													<select name="beast" id="select-beast1" class="form-control select2 custom-select">
														<option value="0">--Select--</option>
														<option value="1">Western wear</option>
														<option value="2">Foot wear</option>
														<option value="3">Top wear</option>
														<option value="4">Bootom wear</option>
														<option value="5">Beuty Groming</option>
														<option value="6">Accessories</option>
														<option value="7">jewellery</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Baby & Kids</label>
													<select name="beast" id="select-beast2" class="form-control select2 custom-select">
														<option value="0">--Select--</option>
														<option value="1">Boys clothing</option>
														<option value="2">girls Clothing</option>
														<option value="3">Toys</option>
														<option value="4">Baby Care</option>
														<option value="5">Kids footwear</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Electronics</label>
													<select name="beast" id="select-beast3" class="form-control select2 custom-select">
														<option value="0">--Select--</option>
														<option value="1">Mobiles</option>
														<option value="2">Laptops</option>
														<option value="3">Gaming & Accessories</option>
														<option value="4">Health care Appliances</option>
													</select>
												</div>
												<div class="form-group mb-0">
													<label class="form-label">Sport,Books & More </label>
													<select name="beast" id="select-beast4" class="form-control select2 custom-select">
														<option value="0">--Select--</option>
														<option value="1">Stationery</option>
														<option value="2">Books</option>
														<option value="3">Gaming</option>
														<option value="4">Music</option>
														<option value="5">Exercise & fitness</option>
													</select>
												</div>
											</div>
										</div>
                                       <div class="card">
											<div class="card-group-item">
												<header class="card-header">
													<h2 class="card-title">Brands </h2>
												</header>
												<div class="filter-content">
													<div class="card-body">
													<form>
														<label class="form-check">
															<input class="form-check-input" type="checkbox" value="">
															<span class="form-check-label">
																Mersedes Benz
															</span>
														</label> <!-- form-check.// -->
														<label class="form-check">
															<input class="form-check-input" type="checkbox" value="">
															<span class="form-check-label">
																Nissan Altima
															</span>
														</label>  <!-- form-check.// -->
														<label class="form-check mb-0">
															<input class="form-check-input" type="checkbox" value="">
															<span class="form-check-label">
																Another Brand
															</span>
														</label>  <!-- form-check.// -->
													</form>
													</div> <!-- card-body.// -->
												</div>
											</div> <!-- card-group-item.// -->
										</div>
										<div class="card">
											<div class="card-group-item">
												<header class="card-header">
													<h2 class="card-title">Choose type </h2>
												</header>
												<div class="filter-content">
													<div class="card-body">
														<label class="form-check">
															<input class="form-check-input" type="radio" name="exampleRadio" value="">
															<span class="form-check-label">
																First hand items
															</span>
														</label>
														<label class="form-check">
															<input class="form-check-input" type="radio" name="exampleRadio" value="">
															<span class="form-check-label">
																Brand new items
															</span>
														</label>
														<label class="form-check">
														<input class="form-check-input" type="radio" name="exampleRadio" value="">
															<span class="form-check-label">
																Some other option
															</span>
														</label>
													</div> <!-- card-body.// -->
												</div>
											</div> <!-- card-group-item.// -->
										</div>
										<a href="#" class="btn btn-primary btn-block mb-3 ">Search</a>
									</div>
								</div>
							</div>
							<div class="col-lg-9">
								<div class="input-group mb-5">
									<input type="text" class="form-control br-tl-7 br-bl-7" placeholder="">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary br-tr-7 br-br-7">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="card item-card">
											<div class="product-grid6  card-body">
												<div class="product-image6">
													<a href="#">
														<img class="img-fluid" src="{{URL::asset('assets/images/products/7.png')}}">
													</a>
												</div>
												<div class="product-content text-center">
													<h4 class="title"><a href="#">Sports shoes</a></h4>
													<div class="price">$699<span class="ml-4">$999</span></div>
												</div>
												<ul class="icons">
													<li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
													<li><a href="" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
													<li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
												</ul>
										    </div>
										</div>
									</div>
									<div class="col-lg-4">
									    <div class="card item-card">
											<div class="product-grid6 card-body ">
												<div class="product-image6">
													<a href="#">
														<img class="img-fluid" src="{{URL::asset('assets/images/products/1.png')}}">
													</a>
												</div>
												<div class="product-content text-center ">
													<h4 class="title"><a href="#">Metal Watch</a></h4>
													<div class="price">$529<span class="ml-4">$799</span></div>
												</div>
												<ul class="icons">
													<li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
													<li><a href="" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
													<li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
												</ul>
										    </div>
										</div>
									</div>
									<div class="col-lg-4">
									    <div class="card item-card">
											<div class="product-grid6  card-body">
												<div class="product-image6">
													<a href="#">
														<img class="img-fluid" src="{{URL::asset('assets/images/products/9.png')}}">
													</a>
												</div>
												<div class="product-content text-center ">
													<h4 class="title"><a href="#">Mens Shoes</a></h4>
													<div class="price">$239<span class="ml-4">$399</span></div>
												</div>
												<ul class="icons">
													<li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
													<li><a href="" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
													<li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
												</ul>
										    </div>
										</div>
									</div>
									<div class="col-lg-4">
									    <div class="card item-card">
											<div class="product-grid6  card-body">
												<div class="product-image6">
													<a href="#">
														<img class="img-fluid" src="{{URL::asset('assets/images/products/2.png')}}">
													</a>
												</div>
												<div class="product-content text-center ">
													<h4 class="title"><a href="#">Leather Watch</a></h4>
													<div class="price">$345<span class="ml-4">$459</span></div>
												</div>
												<ul class="icons">
													<li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
													<li><a href="" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
													<li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
												</ul>
										    </div>
										</div>
									</div>
									<div class="col-lg-4">
									    <div class="card item-card">
											<div class="product-grid6  card-body ">
												<div class="product-image6">
													<a href="#">
														<img class="img-fluid" src="{{URL::asset('assets/images/products/4.png')}}">
													</a>
												</div>
												<div class="product-content text-center">
													<h4 class="title"><a href="#">Digital Watch</a></h4>
													<div class="price">$277<span class="ml-4">$456</span></div>
												</div>
												<ul class="icons">
													<li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
													<li><a href="" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
													<li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
												</ul>
										    </div>
										</div>
									</div>
									<div class="col-lg-4">
									    <div class="card item-card">
											<div class="product-grid6  card-body">
												<div class="product-image6">
													<a href="#">
														<img class="img-fluid" src="{{URL::asset('assets/images/products/8.png')}}">
													</a>
												</div>
												<div class="product-content text-center">
													<h4 class="title"><a href="#">Ladies shoes</a></h4>
													<div class="price">$567<span class="ml-4">$866</span></div>
												</div>
												<ul class="icons">
													<li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
													<li><a href="" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
													<li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
												</ul>
										    </div>
										</div>
									</div>
									<div class="col-lg-4">
									    <div class="card item-card">
											<div class="product-grid6  card-body">
												<div class="product-image6">
													<a href="#">
														<img class="img-fluid" src="{{URL::asset('assets/images/products/3.png')}}">
													</a>
												</div>
												<div class="product-content text-center">
													<h4 class="title"><a href="#">Leather Watch</a></h4>
													<div class="price">$455<span class="ml-4">$567</span></div>
												</div>
												<ul class="icons">
													<li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
													<li><a href="" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
													<li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
												</ul>
										    </div>
										</div>
									</div>

									<div class="col-lg-4">
										<div class="card item-card">
											<div class="product-grid6  card-body">
												<div class="product-image6">
													<a href="#">
														<img class="img-fluid" src="{{URL::asset('assets/images/products/5.png')}}">
													</a>
												</div>
												<div class="product-content text-center">
													<h4 class="title"><a href="#">Gold Watch</a></h4>
													<div class="price">$345<span class="ml-4">$499</span></div>
												</div>
												<ul class="icons">
													<li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
													<li><a href="" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
													<li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
												</ul>
										    </div>
										</div>
									</div>
									<div class="col-lg-4">
									    <div class="card item-card">
											<div class="product-grid6  card-body">
												<div class="product-image6">
													<a href="#">
														<img class="img-fluid" src="{{URL::asset('assets/images/products/6.png')}}">
													</a>
												</div>
												<div class="product-content text-center ">
													<h4 class="title"><a href="#">Sport shoes</a></h4>
													<div class="price">$543<span class="ml-4">$688</span></div>
												</div>
												<ul class="icons">
													<li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
													<li><a href="" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
													<li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
												</ul>
										    </div>
										</div>
									</div>
								</div>
								<div class="mb-3 ">
									<div class="float-right">
										<ul class="pagination ">
											<li class="page-item page-prev disabled">
												<a class="page-link" href="#" tabindex="-1">Prev</a>
											</li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#">4</a></li>
											<li class="page-item"><a class="page-link" href="#">5</a></li>
											<li class="page-item page-next">
												<a class="page-link" href="#">Next</a>
											</li>
										</ul>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
@endsection
@section('js')
<!-- Inline js -->
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
<!--Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
@endsection