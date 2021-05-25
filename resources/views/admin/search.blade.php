@extends('layouts.master')
@section('css')
<!-- select2 Plugin -->
<link href="{{URL::asset('assets/plugins/select2/select2.min-dark.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<div class="page-header">
							<h4 class="page-title">Search </h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Components</a></li>
								<li class="breadcrumb-item active" aria-current="page">Search</li>
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
													<label class="form-label">Mens</label>
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
												<div class="form-group">
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
												<a href="javascript:void(0)" class="btn btn-primary btn-block mt-5">Submit</a>
											</div>
										</div>
										<div class="card">
											<div class="card-body h-100">
												<div class="mb-4 text-center">
													<img src="{{URL::asset('assets/images/products/fashion.png')}}" alt="Apple iPhone 7 128GB" class="img-fluid">
												</div>
												<h4 class="card-title text-center">Womens Shopping Zone</h4>
												<div class="card-subtitle text-center">Upto 50%  Discount slaes Every shopping items</div>
												<div class="text-center">
													<div class="mt-3 ">
														<a href="javascript:void(0)" class="btn btn-primary btn-block"> View More</a>
													</div>
													<div class="mt-3 ">
														<a href="javascript:void(0)" class="btn btn-secondary btn-block"><i class="fe fe-plus"></i> Add to cart</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-9">
								<div class="input-group">
									<input type="text" class="form-control br-tl-7 br-bl-7" placeholder="">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary br-tr-7 br-br-7">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</div>
								</div>
								<div class="card mt-5 store">
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap ">
											<tr>
												<td><div ><img src="{{URL::asset('assets/images/products/mensjackets.png')}}" alt="" class="h-8"></div></td>
												<td>Mens Jackets</td>
												<td>
													<div class="rating-stars block" id="rating" value="4">
														<div class="rating-stars-container">
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-primary d-none d-md-table-cell text-nowrap">50% off</td>

												<td class="text-right">
													<strong>$1,987</strong>
												</td>
												<td class="text-right"><a class="btn btn-primary btn-sm text-white mr-2">view</a></td>
											</tr>
											<tr>
												<td><img src="{{URL::asset('assets/images/products/menssuits.png')}}" alt="" class="h-8"></td>
												<td> Occational Special Edition</td>
												<td>
													<div class="rating-stars block" id="rating" value="4">
														<div class="rating-stars-container">
															<div class="rating-star is--active sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star is--active sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star is--active sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-green d-none d-md-table-cell text-nowrap ">60% off</td>
												<td class="text-right">
													<strong>$2,679</strong>
												</td>
												<td class="text-right"><a class="btn btn-primary btn-sm text-white mr-2">view</a></td>
											</tr>
											<tr>
												<td><img src="{{URL::asset('assets/images/products/sares.jpg')}}" alt="" class="h-8"></td>
												<td>Saree
													<div class="badge badge-primary badge-md">New</div>
												</td>
												<td>
													<div class="rating-stars block" id="rating" value="4">
														<div class="rating-stars-container">
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-warning d-none d-md-table-cell text-nowrap">25% off</td>
												<td class="text-right">
													<strong>$999</strong>
												</td>
												<td class="text-right"><a class="btn btn-primary btn-sm text-white mr-2">view</a></td>
											</tr>
											<tr>
												<td><img src="{{URL::asset('assets/images/products/westernwear.jpg')}}" alt="" class="h-8"></td>
												<td>Western Wear</td>
												<td>
													<div class="rating-stars block" id="rating" value="4">
														<div class="rating-stars-container">
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-info d-none d-md-table-cell text-nowrap">30% off</td>
												<td class="text-right">
													<strong>$699</strong>
												</td>
												<td class="text-right"><a class="btn btn-primary btn-sm text-white mr-2">view</a></td>
											</tr>
											<tr>
												<td><img src="{{URL::asset('assets/images/products/fork.png')}}" alt="" class="h-8"></td>
												<td>Kids Dress
													<div class="badge badge-default badge-md">New</div>
												</td>
												<td>
													<div class="rating-stars block" id="rating" value="4">
														<div class="rating-stars-container">
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-primary d-none d-md-table-cell text-nowrap">47% off</td>
												<td class="text-right">
													<strong>$399</strong>
												</td>
												<td class="text-right"><a class="btn btn-primary btn-sm text-white mr-2">view</a></td>
											</tr>
											<tr>
												<td><img src="{{URL::asset('assets/images/products/toys.png')}}" alt="" class="h-8"></td>
												<td>Kids Toys</td>
												<td>
													<div class="rating-stars block" id="rating" value="4">
														<div class="rating-stars-container">
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-success d-none d-md-table-cell text-nowrap">26% off</td>
												<td class="text-right">
													<strong>$299</strong>
												</td>
												<td class="text-right"><a class="btn btn-primary btn-sm text-white mr-2">view</a></td>
											</tr>
											<tr>
												<td><img src="{{URL::asset('assets/images/products/sony-kd.jpg')}}" alt="" class="h-8"></td>
												<td>Sony KD-49XE7005
													<div class="badge badge-primary badge-md">New</div>
												</td>
												<td>
													<div class="rating-stars block" id="rating" value="4">
														<div class="rating-stars-container">
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-warning d-none d-md-table-cell text-nowrap">43% off</td>
												<td class="text-right">
													<strong>$22,269</strong>
												</td>
												<td class="text-right"><a class="btn btn-primary btn-sm text-white mr-2">view</a></td>
											</tr>
											<tr>
												<td><img src="{{URL::asset('assets/images/products/huawei-mate.jpg')}}" alt="" class="h-8"></td>
												<td>Huawei Mate Pro Dual SIM </td>
												<td>
													<div class="rating-stars block" id="rating" value="4">
														<div class="rating-stars-container">
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-info d-none d-md-table-cell text-nowrap">20% off</td>
												<td class="text-right">
													<strong>$9,999</strong>
												</td>
												<td class="text-right"><a class="btn btn-primary btn-sm text-white mr-2">view</a></td>
											</tr>
											<tr>
												<td><img src="{{URL::asset('assets/images/products/book.jpg')}}" alt="" class="h-8"></td>
												<td>Novel Books
													<div class="badge badge-default badge-md">New</div>
												</td>
												<td>
													<div class="rating-stars block" id="rating" value="4">
														<div class="rating-stars-container">
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-primary d-none d-md-table-cell text-nowrap">14% off</td>
												<td class="text-right">
													<strong>$899</strong>
												</td>
												<td class="text-right"><a class="btn btn-primary btn-sm text-white mr-2">view</a></td>
											</tr>
											<tr>
												<td><img src="{{URL::asset('assets/images/products/welcare.jpg')}}" alt="" class="h-8"></td>
												<td>Welcare Fitness</td>
												<td>
													<div class="rating-stars block" id="rating" value="4">
														<div class="rating-stars-container">
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm is--active">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
															<div class="rating-star sm">
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
												</td>
												<td class="text-right text-success d-none d-md-table-cell text-nowrap">40% off</td>
												<td class="text-right">
													<strong>$3,987</strong>
												</td>
												<td class="text-right"><a class="btn btn-primary btn-sm text-white mr-2">view</a></td>
											</tr>
										</table>
									</div>
								</div>
								<div >
									<ul class="pagination mb-5 float-right">
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
@endsection
@section('js')
<!-- Inline js -->
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
<!--Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
@endsection