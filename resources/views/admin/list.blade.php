@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<div class="page-header">
							<h4 class="page-title">List</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">List</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic List Group</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item">Cras justo odio</li>
											<li class="list-group-item">Dapibus ac facilisis in</li>
											<li class="list-group-item">Morbi leo risus</li>
											<li class="list-group-item">Porta ac consectetur ac</li>
											<li class="list-group-item">Vestibulum at eros</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Active List item</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item active">Cras justo odio</li>
											<li class="list-group-item">Dapibus ac facilisis in</li>
											<li class="list-group-item">Morbi leo risus</li>
											<li class="list-group-item">Porta ac consectetur ac</li>
											<li class="list-group-item">Vestibulum at eros</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Order list</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="listorder">Cras justo odio</li>
											<li class="listorder">Dapibus ac facilisis in</li>
											<li class="listorder">Morbi leo risus</li>
											<li class="listorder">Porta ac consectetur ac</li>
											<li class="listorder">Vestibulum at eros</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Unorder list</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="listunorder">Cras justo odio</li>
											<li class="listunorder">Dapibus ac facilisis in</li>
											<li class="listunorder">Morbi leo risus</li>
											<li class="listunorder">Porta ac consectetur ac</li>
											<li class="listunorder">Vestibulum at eros</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Order list</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="listorder1">Cras justo odio</li>
											<li class="listorder1">Dapibus ac facilisis in</li>
											<li class="listorder1">Morbi leo risus</li>
											<li class="listorder1">Porta ac consectetur ac</li>
											<li class="listorder1">Vestibulum at eros</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Unorder list</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="listunorder1">Cras justo odio</li>
											<li class="listunorder1">Dapibus ac facilisis in</li>
											<li class="listunorder1">Morbi leo risus</li>
											<li class="listunorder1">Porta ac consectetur ac</li>
											<li class="listunorder1">Vestibulum at eros</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Disabled  List item</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item disabled">Cras justo odio</li>
											<li class="list-group-item">Dapibus ac facilisis in</li>
											<li class="list-group-item">Morbi leo risus</li>
											<li class="list-group-item">Porta ac consectetur ac</li>
											<li class="list-group-item">Vestibulum at eros</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Contextual classes with List Group</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item">Dapibus ac facilisis in</li>
											<li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
											<li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
											<li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
											<li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List Group with icons</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Cras justo odio</li>
											<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Dapibus ac facilisis in</li>
											<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Morbi leo risus</li>
											<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Porta ac consectetur ac</li>
											<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Vestibulum at eros</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List Group with colored icons</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item"><i class="fa fa-cog text-primary" aria-hidden="true"></i> Dapibus ac facilisis in</li>
											<li class="list-group-item"><i class="fa fa-cog text-danger" aria-hidden="true"></i> Dapibus ac facilisis in</li>
											<li class="list-group-item"><i class="fa fa-cog text-success" aria-hidden="true"></i> Cras sit amet nibh libero</li>
											<li class="list-group-item"><i class="fa fa-cog text-warning" aria-hidden="true"></i> Porta ac consectetur ac</li>
											<li class="list-group-item"><i class="fa fa-cog text-info" aria-hidden="true"></i> Vestibulum at eros</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List Group  With defalut badges</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item">
											Cras justo odio
											<span class="badgetext badge badge-default badge-pill">20</span>
											</li>
											<li class="list-group-item">
											Dapibus ac facilisis in
											<span class=" badgetext badge badge-default badge-pill">15</span>
											</li>
											<li class="list-group-item">
											Morbi leo risus
											<span class=" badgetext badge badge-default badge-pill">10</span>
											</li>
											<li class="list-group-item">
											Porta ac consectetur ac
											<span class=" badgetext badge badge-default badge-pill">8</span>
											</li>
											<li class="list-group-item">
											Vestibulum at eros
											<span class=" badgetext badge badge-default badge-pill">1</span>
											</li>

										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List Group  With color badges</h3>
									</div>
									<div class="card-body">
										<ul class="list-group">
											<li class="list-group-item justify-content-between">
											Cras justo odio
											<span class="badgetext badge badge-primary badge-pill">20</span>
											</li>
											<li class="list-group-item justify-content-between">
											Dapibus ac facilisis in
											<span class="badgetext badge badge-danger badge-pill">15</span>
											</li>
											<li class="list-group-item justify-content-between">
											Morbi leo risus
											<span class="badgetext badge badge-success badge-pill">10</span>
											</li>
											<li class="list-group-item justify-content-between">
											Porta ac consectetur ac
											<span class="badgetext badge-gradient-warning badge-pill">8</span>
											</li>
											<li class="list-group-item justify-content-between">
											Vestibulum at eros
											<span class="badgetext badge-gradient-info badge-pill">1</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List Group  With Custom content</h3>
									</div>
									<div class="card-body">
										<div class="list-group">
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-1">List group item heading</h5>
													<small class="text-muted">3 days ago</small>
												</div>
												<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
												<small class="text-muted">Donec id elit non mi porta.</small>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-1">List group item heading</h5>
													<small class="text-muted">3 days ago</small>
												</div>
												<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
												<small class="text-muted">Donec id elit non mi porta.</small>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-1">List group item heading</h5>
													<small class="text-muted">3 days ago</small>
												</div>
												<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
												<small class="text-muted">Donec id elit non mi porta.</small>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List Group  With Disabled Custom content</h3>
									</div>
									<div class="card-body">
										<div class="list-group">
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start disabled">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-1">List group item heading</h5>
													<small class="text-muted">3 days ago</small>
												</div>
												<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
												<small class="text-muted">Donec id elit non mi porta.</small>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-1">List group item heading</h5>
													<small class="text-muted">3 days ago</small>
												</div>
												<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
												<small class="text-muted">Donec id elit non mi porta.</small>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-1">List group item heading</h5>
													<small class="text-muted">3 days ago</small>
												</div>
												<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
												<small class="text-muted">Donec id elit non mi porta.</small>
											</a>
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