@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<div class="page-header">
							<h4 class="page-title">Progress Bars</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Progress</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Progress</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-default" style="width: 7%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 20%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 40%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 60%"></div>
										</div>
										<div class="progress progress-md">
											<div class="progress-bar bg-primary" style="width: 80%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Contextual Progress</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-pink" style="width: 7%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-green" style="width: 20%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-yellow" style="width: 40%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-blue" style="width: 60%"></div>
										</div>
										<div class="progress progress-md ">
											<div class="progress-bar bg-orange" style="width: 80%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic Progress with label</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-default" style="width: 7%">7%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-secondary" style="width: 20%"> 20%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-success" style="width: 40%"> 40%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-warning" style="width: 60%"> 60%</div>
										</div>
										<div class="progress progress-md">
											<div class="progress-bar bg-info" style="width: 80%"> 80%</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Contextual Progress with label</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-pink" style="width: 7%"> 7%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-green" style="width: 20%">20%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-yellow" style="width: 40%">40%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-blue" style="width: 60%">60%</div>
										</div>
										<div class="progress progress-md ">
											<div class="progress-bar bg-orange" style="width: 80%"> 80%</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Progress Sizes</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-xs mb-3">
											<div class="progress-bar bg-blue" style="width: 30%"></div>
										</div>
										<div class="progress progress-sm mb-3">
											<div class="progress-bar bg-blue" style="width: 60%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-blue" style="width: 70%"></div>
										</div>
										<div class="progress progress-lg">
											<div class="progress-bar bg-blue" style="width: 80%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Mixed color Progress with Sizes</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-xs mb-3">
											<div class="progress-bar bg-orange" style="width: 5%"></div>
											<div class="progress-bar bg-warning" style="width: 5%"></div>
											<div class="progress-bar bg-info" style="width: 5%"></div>
										</div>
										<div class="progress progress-sm mb-3">
											<div class="progress-bar bg-pink" style="width: 10%"></div>
											<div class="progress-bar bg-yellow" style="width: 15%"></div>
											<div class="progress-bar bg-teal" style="width: 15%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-pink" style="width: 18%"></div>
											<div class="progress-bar bg-blue" style="width: 20%"></div>
											<div class="progress-bar bg-cyan" style="width: 30%"></div>
										</div>

										<div class="progress progress-lg">
											<div class="progress-bar bg-green" style="width: 30%"></div>
											<div class="progress-bar bg-pink" style="width: 20%"></div>
											<div class="progress-bar bg-orange" style="width: 40%"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Striped Progress</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-pink" style="width: 15%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-blue" style="width: 25%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-yellow" style="width: 50%">50%</div>
										</div>
										<div class="progress progress-md">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-green" style="width: 70%">40%</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Animated Progress</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-indeterminate bg-pink" ></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-indeterminate bg-yellow"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-indeterminate bg-blue"></div>
										</div>
										<div class="progress progress-md">
											<div class="progress-bar progress-bar-indeterminate bg-purple"></div>
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