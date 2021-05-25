@extends('layouts.master')
@section('css')
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">Breadcrumbs</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Breadcrumbs</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Simple Breadcrumbs</h3>
									</div>
									<div class="card-body">
										<ol class="breadcrumb1">
											<li class="breadcrumb-item1 active">Home</li>
											<li class="breadcrumb-item1 active">About</li>
										</ol>
										<ol class="breadcrumb1">
											<li class="breadcrumb-item1"><a href="#">Home</a></li>
											<li class="breadcrumb-item1 active">Library</li>
										</ol>
										<ol class="breadcrumb1">
											<li class="breadcrumb-item1"><a href="#">Home</a></li>
											<li class="breadcrumb-item1"><a href="#">Library</a></li>
											<li class="breadcrumb-item1 active">Data</li>
										</ol>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Color Breadcrumbs</h3>
									</div>
									<div class="card-body">
										<ol class="breadcrumb1 bg-primary">
											<li class="breadcrumb-item active text-white">Home</li>
											<li class="breadcrumb-item active">About</li>
										</ol>
										<ol class="breadcrumb1 bg-info">
											<li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
											<li class="breadcrumb-item active">Library</li>
										</ol>
										<ol class="breadcrumb1 bg-secondary">
											<li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
											<li class="breadcrumb-item"><a href="#" class="text-white">Library</a></li>
											<li class="breadcrumb-item active">Data</li>
										</ol>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-lg-12">
							    <div class="card">
									<div class="card-header">
										<h3 class="card-title">Color Breadcrumbs</h3>
									</div>
									<div class="card-body">
										<ol class="breadcrumb1 bg-primary ">
											<li class="breadcrumb-item active"><i class="fa fa-star-o mr-2 text-transparant" aria-hidden="true"></i>Home</li>
										</ol>
										<ol class="breadcrumb1 bg-info">
											<li class="breadcrumb-item1"><i class="fa fa-star-o mr-2 text-white" aria-hidden="true"></i><a class="text-white" href="#">Home</a></li>
											<li class="breadcrumb-item active"><i class="fa fa-star-o mx-2 text-transparant" aria-hidden="true"></i>Library</li>
										</ol>
										<ol class="breadcrumb1 bg-secondary">
											<li class="breadcrumb-item"><i class="fa fa-star-o mr-2 text-white" aria-hidden="true"></i><a class="text-white" href="#">Home</a></li>
											<li class="breadcrumb-item"><i class="fa fa-star-o mx-2 text-white" aria-hidden="true"></i><a class="text-white" href="#">Library</a></li>
											<li class="breadcrumb-item active"><i class="fa fa-star-o mx-2 text-transparant" aria-hidden="true"></i>Data</li>
										</ol>
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