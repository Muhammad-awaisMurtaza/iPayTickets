@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<div class="page-header">
							<h4 class="page-title">Navigation</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Navigation</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Nav</h3>
									</div>
									<div class="card-body">
										<ul class="nav1">
											<li class="nav-item1">
												<a class="nav-link active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled" href="#">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Nav Vertical</h3>
									</div>
									<div class="card-body">
										<ul class="nav1 flex-column">
											<li class="nav-item1">
												<a class="nav-link active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled" href="#">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
                        </div>
						<div class="row row-deck">
						    <div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Color Nav</h3>
									</div>
									<div class="card-body">
										<ul class="nav nav-pills">
											<li class="nav-item m-2">
												<a class="nav-link active" href="#">Active</a>
											</li>
											<li class="nav-item dropdown m-2">
												<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item m-2">
												<a class="nav-link disabled" href="#">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Nav Tabs</h3>
									</div>
									<div class="card-body">
										<ul class="nav1 nav-tabs">
											<li class="nav-item1">
												<a class="nav-link active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disabled" href="#">Disabled</a>
											</li>
										</ul>
									</div>
								</div>
                            </div>
						</div>

						<div class="row">
						    <div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Color Nav</h3>
									</div>
									<div class="card-body">
										<ul class="nav1 bg-primary">
											<li class="nav-item1">
												<a class="nav-link text-white active" href="#">Active</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link text-white" href="#">Link</a>
											</li>
											<li class="nav-item1">
												<a class="nav-link disable" href="#">Disabled</a>
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
@endsection