@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<div class="page-header">
							<h4 class="page-title">Pagination</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Pagination</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Basic pagination</div>
									</div>
									<div class="card-body">
										<div class="pagination-wrapper">
											<nav aria-label="Page navigation">
												<ul class="pagination mg-b-0">
													<li class="page-item active">
														<a class="page-link" href="#">1</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">2</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">3</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">4</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">5</a>
													</li>
													<li class="page-item">
														<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
													</li>
												</ul>
											</nav>
										</div>
										<!-- pagination-wrapper -->
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Basic pagination</div>
									</div>
									<div class="card-body">
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
										<!-- pagination-wrapper -->
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Model Pagination</div>
									</div>
									<div class="card-body ">
										<ul class="pagination mg-b-0 page-0 ">
											<li class="page-item">
												<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a>
											</li>
											<li class="page-item">
												<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
											</li>
											<li class="page-item">
												<a class="page-link" href="#">2</a>
											</li>
											<li class="page-item active">
												<a class="page-link" href="#">3</a>
											</li>
											<li class="page-item">
												<a class="page-link hidden-xs-down" href="#">4</a>
											</li>
											<li class="page-item">
												<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
											</li>
											<li class="page-item">
												<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a>
											</li>
										</ul>
									</div>
									<!-- pagination-wrapper -->
								</div>
								<!-- section-wrapper -->
							</div>

							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Model Pagination2</div>
									</div>
									<div class="card-body">
										<nav aria-label="Page navigation">
											<ul class="pagination pagination-success mg-b-0">
												<li class="page-item page-0">
													<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
												</li>
												<li class="page-item">
													<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a>
												</li>
												<li class="page-item active">
													<a class="page-link" href="#">4</a>
												</li>
												<li class="page-item disabled"><span class="page-link">...</span></li>
												<li class="page-item">
													<a class="page-link" href="#">10</a>
												</li>
												<li class="page-item page-0">
													<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
												</li>
												<li class="page-item">
													<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a>
												</li>
											</ul>
										</nav>
										<!-- pagination-wrapper -->
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