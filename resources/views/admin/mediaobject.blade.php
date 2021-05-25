@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<div class="page-header">
							<h4 class="page-title">MediaObject</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Mediaobject</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Default MediaObject</h3>
									</div>
									<div class="card-body  h-100">
										<div class="media m-0">
											<div class="media-left">
												<a href="#">
													<img class="media-object" src="{{URL::asset('assets/images/media/media1.jpg')}}" alt="media1">
												</a>
											</div>
											<div class="media-body">
												<h4 class="media-heading">Media heading</h4>
												Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
											</div>
										</div>
										<div class="media">
											<div class="media-left">
												<a href="#">
													<img class="media-object" src="{{URL::asset('assets/images/media/media2.jpg')}}" alt="media1">
												</a>
											</div>
											<div class="media-body">
												<h4 class="media-heading">Media heading</h4>
												Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
												<div class="media">
													<div class="media-left">
														<a href="#">
															<img class="media-object" src="{{URL::asset('assets/images/media/media3.jpg')}}" alt="media1">
														</a>
													</div>
													<div class="media-body">
														<h4 class="media-heading">Nested Media  heading</h4>
														Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
													</div>
												</div>
											</div>
										</div>
										<div class="media">
											<div class="media-body">
												<h4 class="media-heading">Media heading</h4>
												Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
											</div>
											<div class="media-right">
												<a href="#">
													<img class="media-object" src="{{URL::asset('assets/images/media/media4.jpg')}}" alt="media1">
												</a>
											</div>
										</div>
										<div class="media">
											<div class="media-body">
												<h4 class="media-heading">Media heading</h4>
												Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
											</div>
											<div class="media-right">
												<a href="#">
													<img class="media-object" src="{{URL::asset('assets/images/media/media2.jpg')}}" alt="media1">
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Media alignment</h3>
									</div>
									<div class="card-body h-100">
										<div class="media  m-0">
											<div class="media-left">
												<a href="#">
												<img class="media-object" src="{{URL::asset('assets/images/media/media1.jpg')}}" alt="topmedia">
												</a>
											</div>
											<div class="media-body">
												<h4 class="media-heading">Top aligned media</h4>
												<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
												<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy</p>
											</div>
										</div>
										<div class="media">
											<div class="media-left mt-8">
												<a href="#">
												<img class="media-object" src="{{URL::asset('assets/images/media/media2.jpg')}}" alt="topmedia">
												</a>
											</div>
											<div class="media-body">
												<h4 class="media-heading">Middle aligned media</h4>
												<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
												<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy</p>
												<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy</p>
											</div>
										</div>
										<div class="media">
											<div class="media-left mt-9">
												<a href="#">
												<img class="media-object" src="{{URL::asset('assets/images/media/media3.jpg')}}" alt="topmedia">
												</a>
											</div>
											<div class="media-body">
												<h4 class="media-heading">Bottom aligned media</h4>
												<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
												<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy</p>
												<p>  web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Media List</h3>
									</div>
									<div class="card-body h-100">
										<div class="media  m-0">
											<div class="media-left">
												<a href="#">
													<img class="media-object" src="{{URL::asset('assets/images/media/media4.jpg')}}" alt="media1">
												</a>
											</div>
											<div class="media-body">
												<h4 class="media-heading">Media heading</h4>
												Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
												<div class="media">
													<div class="media-left">
														<a href="#">
															<img class="media-object" src="{{URL::asset('assets/images/media/media3.jpg')}}" alt="media1">
														</a>
													</div>
													<div class="media-body">
														<h4 class="media-heading">Nested Media  heading</h4>
														Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
														<div class="media">
															<div class="media-left">
																<a href="#">
																	<img class="media-object" src="{{URL::asset('assets/images/media/media4.jpg')}}" alt="media1">
																</a>
															</div>
															<div class="media-body">
																<h4 class="media-heading">Nested Media  heading</h4>
																Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
															</div>
														</div>
													</div>
												</div>
												<div class="media">
													<div class="media-left">
														<a href="#">
															<img class="media-object" src="{{URL::asset('assets/images/media/media2.jpg')}}" alt="media1">
														</a>
													</div>
													<div class="media-body">
														<h4 class="media-heading">Nested Media  heading</h4>
														Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
													</div>
												</div>
											</div>
										</div>
										<div class="media">
											<div class="media-left">
												<a href="#">
													<img class="media-object" src="{{URL::asset('assets/images/media/media1.jpg')}}" alt="media1">
												</a>
											</div>
											<div class="media-body">
												<h4 class="media-heading"> Media  heading</h4>
												Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
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