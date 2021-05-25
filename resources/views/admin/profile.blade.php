@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<div class="page-header">
							<h4 class="page-title">Profile</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Profile</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row" id="user-profile">
						    <div class="col-lg-4 col-md-12 col-sm-12 col-xl-3">
								<div class="card clearfix">
									<div class="card-header">
										 <h2 class="card-title">Profile</h2>
									</div>
								    <div class="card-body p-0">
										<div class="card-body bg-primary text-white">
											<img src="{{URL::asset('assets/images/faces/male/16.jpg')}}" alt="" class="profile-img img-responsive center-block">
											<a href="editprofile.html" class="profile-image">
												<span class="fa fa-pencil" aria-hidden="true"></span>
											</a>
											<div class="profile-label mt-3">
												<span >Christopher</span>
											</div>

											<div class="profile-stars">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<span>Super User</span>
											</div>

											<div class="profile-since">
												Member since: Jan 2012
											</div>
										</div>
                                        <div class="border-bottom align-items-center">
											<div class="card-body">
												<div class="profile-details">
													<div class="list-group list-group-transparent mb-0 mail-inbox">
														<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
															<span class="icon mr-3"><i class="fa fa-truck"></i></span>Orders: <span>456</span>
														</a>
														<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
															<span class="icon mr-3"><i class="fa fa-comment"></i></span>Posts: <span>828</span>
														</a>
														<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
															<span class="icon mr-3"><i class="fa fa-tasks"></i></span>Tasks done: <span>1024</span>z
														</a>
													</div>
												</div>
											</div>
										</div>
                                        <div class="p-3">
											<div class="profile-message-btn center-block text-center">
												<a href="#" class="btn btn-secondary btn-block">
													<i class="fa fa-envelope"></i> Send message
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										 <h2 class="card-title">Contact &amp; Personal Info</h2>
									</div>
									<div class="card-body h-100">
										<div class="media-list">
											<div class="media mt-0">
												<div class="mediaicon bg-primary">
													<i class="fa fa-link" aria-hidden="true"></i>
												</div>
												<div class="media-body ml-5 ">
													<h6 class="mediafont text-dark mb-0">Websites</h6><a class="d-block" href="">http://adminor.com</a> <a class="d-block" href="">http://adminor.net</a>
												</div>
												<!-- media-body -->
											</div>
											<!-- media -->

											<!-- media -->
											<div class="media">
												<div class="mediaicon bg-secondary">
													<i class="fa fa-envelope-o" aria-hidden="true"></i>
												</div>
												<div class="media-body ml-5">
													<h6 class="mediafont text-dark mb-0">Email Address</h6><a class="d-block" href="">georgemestayer@adminor.com</a>
												</div>
												<!-- media-body -->
											</div>
											<!-- media -->
											<div class="media">
												<div class="mediaicon bg-info">
													<i class="fa fa-twitter" aria-hidden="true"></i>
												</div>
												<div class="media-body ml-5">
													<h6 class="mediafont text-dark mb-0">Twitter</h6><a class="d-block" href="#">@adminor</a>
												</div>
												<!-- media-body -->
											</div>
											<!-- media -->
										</div>
									</div>
									<!-- media-list -->
								</div>
							</div>

							<div class="col-lg-8 col-md-12 col-sm-12 col-xl-9">
							    <div class="card clearfix">
									<div class="card-header">
										<h2 class="card-title">User info</h2>
									</div>
									<div class="card-body">
										<div class="row profile-user-info">
											<div class="col-lg-12">
												<div class="table-responsive border ">
													<table class="table row table-borderless w-100 m-0 ">
														<tbody class="col-lg-6 p-0">
															<tr>
																<td><strong>Full Name :</strong> Christopher Greear</td>
															</tr>
															<tr>
																<td><strong>Location :</strong> USA</td>
															</tr>
															<tr>
																<td><strong>Languages :</strong> English, German, Spanish.</td>
															</tr>
														</tbody>
														<tbody class="col-lg-6 p-0">
															<tr>
																<td><strong>Website :</strong> adminor.com</td>
															</tr>
															<tr>
																<td><strong>Email :</strong> christopher@adminor.com</td>
															</tr>
															<tr>
																<td><strong>Phone :</strong> +125 254 3562 </td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="panel panel-primary">
											<div class=" tab-menu-heading">
												<div class="tabs-menu2 ">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li ><a href="#tab-friends"  class="active" data-toggle="tab">Friends</a></li>
														<li><a href="#tab-activity" data-toggle="tab">Activity</a></li>
														<li><a href="#tab-chat" data-toggle="tab">Chat</a></li>
													</ul>
												</div>
											</div>
											<div class="card-body pb-0 tabs-menu-body">
												<div class="tab-content">
													<div class="tab-pane active" id="tab-friends">
														<ul class="widget-users row">
															<li class="col-lg-4 col-sm-12 col-12">
																<div class="card">
																	<div class="card-body text-center">
																		<span class="avatar avatar-xxl brround" style="background-image: url({{URL::asset('assets/images/faces/male/25.jpg')}})"></span>
																		<h4 class="h4 mb-0 mt-3">James Thomas</h2>
																		<p class="card-text">Web designer</p>
																	</div>
																	<div class="card-footer text-center">
																		<div class="row user-social-detail">
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="col-lg-4 col-sm-12 col-12">
																<div class="card">
																	<div class="card-body text-center">
																		<span class="avatar avatar-xxl brround" style="background-image: url({{URL::asset('assets/images/faces/female/19.jpg')}})"></span>
																		<h4 class="h4 mb-0 mt-3">George Clooney</h2>
																		<p class="card-text">Web designer</p>
																	</div>
																	<div class="card-footer text-center">
																		<div class="row user-social-detail">
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="col-lg-4 col-sm-12 col-12">
																<div class="card">
																	<div class="card-body text-center">
																		<span class="avatar avatar-xxl brround" style="background-image: url({{URL::asset('assets/images/faces/male/20.jpg')}})"></span>
																		<h4 class="h4 mb-0 mt-3">Robert Downey Jr.</h2>
																		<p class="card-text">Web designer</p>
																	</div>
																	<div class="card-footer text-center">
																		<div class="row user-social-detail">
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="col-lg-4 col-sm-12 col-12">
																<div class="card mb-lg-0">
																	<div class="card-body text-center">
																		<span class="avatar avatar-xxl brround" style="background-image: url({{URL::asset('assets/images/faces/female/12.jpg')}})"></span>
																		<h4 class="h4 mb-0 mt-3">Emma Watson</h2>
																		<p class="card-text">Web designer</p>
																	</div>
																	<div class="card-footer text-center">
																		<div class="row user-social-detail">
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="col-lg-4 col-sm-12 col-12">
																<div class="card mb-lg-0">
																	<div class="card-body text-center">
																		<span class="avatar avatar-xxl brround" style="background-image: url({{URL::asset('assets/images/faces/male/24.jpg')}})"></span>
																		<h4 class="h4 mb-0 mt-3">Mila Kunis</h2>
																		<p class="card-text">Web designer</p>
																	</div>
																	<div class="card-footer text-center">
																		<div class="row user-social-detail">
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="col-lg-4 col-sm-12 col-12">
																<div class="card mb-0">
																	<div class="card-body text-center">
																		<span class="avatar avatar-xxl brround" style="background-image: url({{URL::asset('assets/images/faces/male/26.jpg')}})"></span>
																		<h4 class="h4 mb-0 mt-3">Ryan Gossling</h2>
																		<p class="card-text">Web designer</p>
																	</div>
																	<div class="card-footer text-center">
																		<div class="row user-social-detail">
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
																			</div>
																			<div class="col-lg-4 col-sm-4 col-4">
																				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
														<br>
													</div>

													<div class="tab-pane fade" id="tab-activity">
														<div class="table-responsive">
															<table class="table text-nowrap">
																<tbody>
																	<tr>
																		<td class="text-center">
																			<i class="fa fa-comment"></i>
																		</td>
																		<td>
																			John Doe  posted a comment in <a href="#">Avengers Initiative</a> project.
																		</td>
																		<td>
																			2014/08/08 12:08
																		</td>
																	</tr>
																	<tr>
																		<td class="text-center">
																			<i class="fa fa-truck"></i>
																		</td>
																		<td>
																			John Doe  changed order status from <span class="badge  badge-primary">Pending</span> to <span class="badge badge-success">Completed</span>
																		</td>
																		<td>
																			2014/08/08 12:08
																		</td>
																	</tr>
																	<tr>
																		<td class="text-center">
																			<i class="fa fa-check"></i>
																		</td>
																		<td>
																			John Doe  posted a comment in <a href="#">Lost in Translation opening scene</a> discussion.
																		</td>
																		<td>
																			2014/08/08 12:08
																		</td>
																	</tr>
																	<tr>
																		<td class="text-center">
																			<i class="fa fa-users"></i>
																		</td>
																		<td>
																			John Doe  posted a comment in <a href="#">Avengers Initiative</a> project.
																		</td>
																		<td>
																			2014/08/08 12:08
																		</td>
																	</tr>
																	<tr>
																		<td class="text-center">
																			<i class="fa fa-heart"></i>
																		</td>
																		<td>
																			John Doe  changed order status from <span class="badge badge-warning">On Hold</span> to <span class="badge badge-danger">Disabled</span>
																		</td>
																		<td>
																			2014/08/08 12:08
																		</td>
																	</tr>
																	<tr>
																		<td class="text-center">
																			<i class="fa fa-check"></i>
																		</td>
																		<td>
																			John Doe  posted a comment in <a href="#">Lost in Translation opening scene</a> discussion.
																		</td>
																		<td>
																			2014/08/08 12:08
																		</td>
																	</tr>
																	<tr>
																		<td class="text-center">
																			<i class="fa fa-truck"></i>
																		</td>
																		<td>
																			John Doe  changed order status from <span class="badge  badge-primary">Pending</span> to <span class="badge badge-success">Completed</span>
																		</td>
																		<td>
																			2014/08/08 12:08
																		</td>
																	</tr>
																	<tr>
																		<td class="text-center">
																			<i class="fa fa-users"></i>
																		</td>
																		<td>
																			John Doe  posted a comment in <a href="#">Avengers Initiative</a> project.
																		</td>
																		<td>
																			2014/08/08 12:08
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="tab-chat">
														<div class="conversation-wrapper">
															<div class="conversation-content">
																<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 340px;">
																	<div class="conversation-inner" style="overflow: hidden; width: auto; height: 340px;">

																		<div class="conversation-item item-left clearfix">
																			<div class="conversation-user">
																				<img src="{{URL::asset('assets/images/faces/female/12.jpg')}}" alt="">
																			</div>
																			<div class="conversation-body">
																				<div class="name">
																					Ryan Gossling
																				</div>
																				<div class="time hidden-xs">
																					September 21, 2013 18:28
																				</div>
																				<div class="text">
																					I don't think they tried to market it to the billionaire, spelunking, base-jumping crowd.
																				</div>
																			</div>
																		</div>
																		<div class="conversation-item item-right clearfix">
																			<div class="conversation-user">
																				<img src="{{URL::asset('assets/images/faces/male/15.jpg')}}" alt="">
																			</div>
																			<div class="conversation-body">
																				<div class="name">
																					Mila Kunis
																				</div>
																				<div class="time hidden-xs">
																					September 21, 2013 12:45
																				</div>
																				<div class="text">
																					Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you.
																				</div>
																			</div>
																		</div>
																		<div class="conversation-item item-right clearfix">
																			<div class="conversation-user">
																				<img src="{{URL::asset('assets/images/faces/male/23.jpg')}}" alt="">
																			</div>
																			<div class="conversation-body">
																				<div class="name">
																					Mila Kunis
																				</div>
																				<div class="time hidden-xs">
																					September 21, 2013 12:45
																				</div>
																				<div class="text">
																					Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you.
																				</div>
																			</div>
																		</div>
																		<div class="conversation-item item-left clearfix">
																			<div class="conversation-user">
																				<img src="{{URL::asset('assets/images/faces/female/1.jpg')}}" alt="">
																			</div>
																			<div class="conversation-body">
																				<div class="name">
																					Ryan Gossling
																				</div>
																				<div class="time hidden-xs">
																					September 21, 2013 18:28
																				</div>
																				<div class="text">
																					I don't think they tried to market it to the billionaire, spelunking, base-jumping crowd.
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(0, 0, 0);"></div>
																	<div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div>
																</div>
															</div>
															<div class="conversation-new-message">
																<form>
																	<div class="form-group">
																		<textarea class="form-control" rows="2" placeholder="Enter your message..."></textarea>
																	</div>

																	<div class="clearfix mb-3">
																		<button type="submit" class="btn btn-success pull-right">Send message</button>
																	</div>
																</form>
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
					</div>
				</div>
			</div>
@endsection
@section('js')
@endsection