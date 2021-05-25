@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<div class="page-header">
							<h4 class="page-title">Rating</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">UI Design</a></li>
								<li class="breadcrumb-item active" aria-current="page">rating</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row row-cards">
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Star Rating
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="rating">
											<input type="number" readonly="readonly" class="rating-value" name="rating-stars-value" id="rating-stars-value" value="1">
											<div class="rating-stars-container">
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Heart Rating
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="another-rating">
											<input type="number" readonly="readonly" class="rating-value" name="another-rating-stars-value" id="another-rating-stars-value" value="2">
											<div class="rating-stars-container">
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Multi Star Rating
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="more-rating">
											<input type="number" readonly="readonly" class="rating-value" name="more-rating-stars-value" id="more-rating-stars-value" value="2">
											<div class="rating-stars-container">
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Multi Heart Rating
										</div>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="another-rating1">
											<input type="number" readonly="readonly" class="rating-value" name="another-rating-stars-value" id="another-rating-stars-value2" value="4">
											<div class="rating-stars-container">
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
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
<!--rating -->
<script src="{{URL::asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
@endsection