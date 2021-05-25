@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<div class="page-header">
							<h4 class="page-title">Jumbotron</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Jumbotron</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Simple Jumbotron</h3>
									</div>
									<div class="card-body">
										<div class="jumbotron">
											<h1 class="display-3">Hello, world!</h1>
											<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
											<hr class="my-4">
											<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
											<p class="lead m-0">
												<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Jumbotron</h3>
									</div>
									<div class="card-body">
										<div class="jumbotron ">
											<div class="container">
												<h1 class="display-3">jumbotron</h1>
												<p class="lead m-0">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
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