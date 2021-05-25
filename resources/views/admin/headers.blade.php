@extends('layouts.master')
@section('css')
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">Headers</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Headers</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Search box with Navigation</div>
									</div>
									<div >
										<div class="header bg-primary">
											<div class="container pl-3 pr-3">
												<div class="d-flex">
													<a class="header-brand" href="index.html">
														<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img" alt="adminor logo">
													</a>
													<div class="d-flex order-lg-2 ml-auto header-right-icons">
														<div class="p-2">
															<form class="input-icon ">
																<div class="input-icon-addon">
																	<i class="fe fe-search"></i>
																</div>
																<input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
															</form>
														</div>
														<div class="dropdown d-none d-md-flex" >
															<div class="full-screen-link ">
																<a href="" class=" text-white" id="fullscreen-button">
																	<i class="fa fa-expand nav-link text-white"></i>
																</a>
															</div>
														</div>
														<div class="dropdown d-none d-md-flex">
															<a class="nav-link icon" data-toggle="dropdown">
																<i class="fa fa-bell-o"></i>
																<span class="nav-unread bg-warning"></span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg">
																		<i class="fa fa-thumbs-o-up"></i>
																	</div>
																	<div>
																		<strong>Someone likes our posts.</strong>
																		<div class="small text-muted">3 hours ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg">
																		<i class="fa fa-commenting-o"></i>
																	</div>
																	<div>
																		<strong> 3 New Comments</strong>
																		<div class="small text-muted">5  hour ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg">
																		<i class="fa fa-cogs"></i>
																	</div>
																	<div>
																		<strong> Server Rebooted.</strong>
																		<div class="small text-muted">45 mintues ago</div>
																	</div>
																</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item text-center">View all Notification</a>
															</div>
														</div>
														<div class="dropdown d-none d-md-flex">
															<a class="nav-link icon text-center" data-toggle="dropdown">
																<i class="icon icon-speech"></i>
																<span class=" nav-unread badge badge-info badge-pill">2</span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																<a href="#" class="dropdown-item text-center">2 New Messages</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<span class="avatar brround mr-3 align-self-center cover-image" data-image-src="{{URL::asset('assets/images/faces/male/41.jpg')}}"></span>
																	<div>
																		<strong>Madeleine</strong> Hey! there I' am available....
																		<div class="small text-muted">3 hours ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<span class="avatar brround mr-3 align-self-center cover-image" data-image-src="{{URL::asset('assets/images/faces/female/1.jpg')}}"></span>
																	<div>
																		<strong>Anthony</strong> New product Launching...
																		<div class="small text-muted">5  hour ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<span class="avatar brround mr-3 align-self-center cover-image" data-image-src= "{{URL::asset('assets/images/faces/female/18.jpg')}}"></span>
																	<div>
																		<strong>Olivia</strong> New Schedule Realease......
																		<div class="small text-muted">45 mintues ago</div>
																	</div>
																</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item text-center">See all Messages</a>
															</div>
														</div>
														<div class="dropdown d-none d-md-flex ">
															<a class="nav-link icon " data-toggle="dropdown">
																<i class="fe fe-grid floating"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																<ul class="drop-icon-wrap p-1">
																	<li>
																		<a href="email.html" class="drop-icon-item">
																			<i class="fe fe-mail text-dark"></i>
																			<span class="block"> E-mail</span>
																		</a>
																	</li>
																	<li>
																		<a href="calendar2.html" class="drop-icon-item">
																			<i class="fe fe-calendar text-dark"></i>
																			<span class="block">calendar</span>
																		</a>
																	</li>
																	<li>
																		<a href="maps.html" class="drop-icon-item">
																			<i class="fe fe-map-pin text-dark"></i>
																			<span class="block">map</span>
																		</a>
																	</li>
																	<li>
																		<a href="cart.html" class="drop-icon-item">
																			<i class="fe fe-shopping-cart text-dark"></i>
																			<span class="block">Cart</span>
																		</a>
																	</li>
																	<li>
																		<a href="chat.html" class="drop-icon-item">
																			<i class="fe fe-message-square text-dark"></i>
																			<span class="block">chat</span>
																		</a>
																	</li>
																	<li>
																		<a href="profile.html" class="drop-icon-item">
																			<i class="fe fe-phone-outgoing text-dark"></i>
																			<span class="block">contact</span>
																		</a>
																	</li>
																</ul>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item text-center">View all</a>
															</div>
														</div>
														<div class="dropdown text-center selector">
															<a href="#" class="nav-link leading-none" data-toggle="dropdown">
																<span class="avatar avatar-sm brround cover-image" data-image-src="{{URL::asset('assets/images/faces/female/25.jpg')}}"></span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
																<div class="text-center">
																	<a href="#" class="dropdown-item text-center font-weight-sembold user" data-toggle="dropdown">Joyce Stewart</a>
																	<span class="text-center user-semi-title text-dark">web designer</span>
																	<div class="dropdown-divider"></div>
																</div>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-account-outline"></i> Profile
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon  mdi mdi-settings"></i> Settings
																</a>
																<a class="dropdown-item" href="#">
																	<span class="float-right"><span class="badge badge-primary">6</span></span>
																	<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
																</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
																</a>
																<a class="dropdown-item" href="login.html">
																	<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
																</a>
															</div>
														</div>
													</div>
													<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
														<span class="header-toggler-icon"></span>
													</a>
												</div>
											</div>
										</div>
										<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse1">
											<div class="container">
												<div class="row align-items-center">
													<div class="col-lg order-lg-first">
														<ul class="nav nav-tabs border-0 flex-column flex-lg-row">
															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link " data-toggle="dropdown"><i class="fa fa-desktop"></i>Dashboard </a>
																<div class="dropdown-menu dropdown-menu-arrow" >
																	<a href="index.html" class="dropdown-item ">Dashboard 01</a>
																	<a href="index2.html" class="dropdown-item ">Dashboard 02</a>
																	<a href="index3.html" class="dropdown-item ">Dashboard 03</a>
																	<a href="index4.html" class="dropdown-item ">Dashboard 04</a>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="widgets.html" class="nav-link "><i class="fa fa-window-restore"></i> Widgets</a>
															</li>
															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-tachometer"></i>UI Design</a>
																<div class="dropdown-menu dropdown-menu-arrow mega-menu">
																	<div class="row">
																		<div class="col-md-6">
																			<a href="charts.html" class="dropdown-item ">Graph Charts</a>
																			<a href="chart-line.html" class="dropdown-item ">line Charts</a>
																			<a href="chart-donut.html" class="dropdown-item ">Donut Charts</a>
																			<a href="chart-pie.html" class="dropdown-item ">Pie Charts</a>
																			<a href="cards.html" class="dropdown-item ">Cards design</a>
																			<a href="maps.html" class="dropdown-item ">Maps</a>
																			<a href="sweetalert.html" class="dropdown-item ">Sweet alert</a>
																		</div>
																		<div class="col-md-6">
																			<a href="time-line.html" class="dropdown-item ">Timeline</a>
																			<a href="chat.html" class="dropdown-item ">Default Chat</a>
																			<a href="counters.html" class="dropdown-item ">Counters</a>
																			<a href="loaders.html" class="dropdown-item ">Loaders</a>
																			<a href="notify.html" class="dropdown-item ">Notifications</a>
																			<a href="rangeslider.html" class="dropdown-item ">Range slider</a>
																			<a href="scroll.html" class="dropdown-item ">Content Scroll bar</a>
																		</div>
																	</div>
																</div>
															</li>

															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link active" data-toggle="dropdown"><i class="fa fa-pencil-square-o"></i>UI Elements</a>
																<div class="dropdown-menu dropdown-menu-arrow mega-menu">
																	<div class="row">
																		<div class="col-md-6">
																			<a href="alerts.html" class="dropdown-item ">Alerts</a>
																			<a href="buttons.html" class="dropdown-item ">Buttons</a>
																			<a href="colors.html" class="dropdown-item ">Colors</a>
																			<a href="chart.html" class="dropdown-item ">Sample Charts</a>
																			<a href="avatars.html" class="dropdown-item ">Avatars</a>
																			<a href="avatar-round.html" class="dropdown-item ">RoundAvatars</a>
																			<a href="avatar-radius.html" class="dropdown-item ">RadiusAvatars</a>
																			<a href="accordion.html" class="dropdown-item ">Accordion</a>
																			<a href="dropdown.html" class="dropdown-item ">Dropdown</a>
																			<a href="list.html" class="dropdown-item ">List</a>
																			<a href="tags.html" class="dropdown-item ">Tags</a>
																			<a href="pagination.html" class="dropdown-item ">Pagination</a>
																		</div>
																		<div class="col-md-6">
																			<a href="modal.html" class="dropdown-item ">Modal</a>
																			<a href="navigation.html" class="dropdown-item ">Navigation</a>
																			<a href="progress.html" class="dropdown-item ">Progress</a>
																			<a href="typography.html" class="dropdown-item ">Typography</a>
																			<a href="tooltipandpopover.html" class="dropdown-item ">Tooltip & Popover</a>
																			<a href="breadcrumbs.html" class="dropdown-item ">Breadcrumbs</a>
																			<a href="badge.html" class="dropdown-item ">Badges</a>
																			<a href="jumbotron.html" class="dropdown-item ">Jumbotron</a>
																			<a href="panels.html" class="dropdown-item ">Panel</a>
																			<a href="thumbnails.html" class="dropdown-item ">Thumbnails</a>
																			<a href="mediaobject.html" class="dropdown-item ">Mediaobject</a>
																			<a href="tabs.html" class="dropdown-item ">Tabs</a>
																		</div>
																	</div>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="mdi mdi-file"></i>Pages</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="profile.html" class="dropdown-item ">Profile</a>
																	<a href="editprofile.html" class="dropdown-item ">Edit Profile</a>
																	<a href="login.html" class="dropdown-item ">Login</a>
																	<a href="register.html" class="dropdown-item ">Register</a>
																	<a href="forgot-password.html" class="dropdown-item ">Forgot password</a>
																	<a href="email.html" class="dropdown-item ">Email</a>
																	<a href="emailservices.html" class="dropdown-item ">Email Inbox</a>
																	<a href="empty.html" class="dropdown-item ">Empty page</a>
																	<a href="construction.html" class="dropdown-item ">Under Construction</a>
																	<a href="lockscreen.html" class="dropdown-item ">Lock screen</a>
																	<a href="400.html" class="dropdown-item ">400 error</a>
																	<a href="401.html" class="dropdown-item ">401 error</a>
																	<a href="403.html" class="dropdown-item ">403 error</a>
																	<a href="404.html" class="dropdown-item ">404 error</a>
																	<a href="500.html" class="dropdown-item ">500 error</a>
																	<a href="503.html" class="dropdown-item ">503 error</a>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="mdi mdi-arrange-send-backward"></i>Forms</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="form-elements.html" class="dropdown-item ">Form Elements</a>
																	<a href="form-wizard.html" class="dropdown-item ">form-wizard Elements</a>
																	<a href="wysiwyag.html" class="dropdown-item ">Text Editor</a>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Default Navigation</div>
									</div>
									<div >
										<div class="header bg-primary">
											<div class="container pl-3 pr-3">
												<div class="d-flex">
													<a class="header-brand" href="index.html">
														<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img" alt="adminor logo">
													</a>
													<div class="d-flex order-lg-2 ml-auto header-right-icons">
														<div class="p-2">
															<form class="input-icon ">
																<div class="input-icon-addon">
																	<i class="fe fe-search"></i>
																</div>
																<input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
															</form>
														</div>
														<div class="dropdown d-none d-md-flex" >
															<div class="full-screen-link ">
																<a href="" class=" text-white" id="fullscreen-button">
																	<i class="fa fa-expand nav-link text-white"></i>
																</a>
															</div>
														</div>
														<div class="dropdown d-none d-md-flex">
															<a class="nav-link icon" data-toggle="dropdown">
																<i class="fa fa-bell-o"></i>
																<span class="nav-unread bg-warning"></span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg">
																		<i class="fa fa-thumbs-o-up"></i>
																	</div>
																	<div>
																		<strong>Someone likes our posts.</strong>
																		<div class="small text-muted">3 hours ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg">
																		<i class="fa fa-commenting-o"></i>
																	</div>
																	<div>
																		<strong> 3 New Comments</strong>
																		<div class="small text-muted">5  hour ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<div class="notifyimg">
																		<i class="fa fa-cogs"></i>
																	</div>
																	<div>
																		<strong> Server Rebooted.</strong>
																		<div class="small text-muted">45 mintues ago</div>
																	</div>
																</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item text-center">View all Notification</a>
															</div>
														</div>
														<div class="dropdown d-none d-md-flex">
															<a class="nav-link icon text-center" data-toggle="dropdown">
																<i class="icon icon-speech"></i>
																<span class=" nav-unread badge badge-info badge-pill">2</span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																<a href="#" class="dropdown-item text-center">2 New Messages</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<span class="avatar brround mr-3 align-self-center cover-image" data-image-src="{{URL::asset('assets/images/faces/male/41.jpg')}}"></span>
																	<div>
																		<strong>Madeleine</strong> Hey! there I' am available....
																		<div class="small text-muted">3 hours ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<span class="avatar brround mr-3 align-self-center cover-image" data-image-src="{{URL::asset('assets/images/faces/female/1.jpg')}}"></span>
																	<div>
																		<strong>Anthony</strong> New product Launching...
																		<div class="small text-muted">5  hour ago</div>
																	</div>
																</a>
																<a href="#" class="dropdown-item d-flex pb-3">
																	<span class="avatar brround mr-3 align-self-center cover-image" data-image-src= "{{URL::asset('assets/images/faces/female/18.jpg')}}"></span>
																	<div>
																		<strong>Olivia</strong> New Schedule Realease......
																		<div class="small text-muted">45 mintues ago</div>
																	</div>
																</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item text-center">See all Messages</a>
															</div>
														</div>
														<div class="dropdown d-none d-md-flex ">
															<a class="nav-link icon " data-toggle="dropdown">
																<i class="fe fe-grid floating"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																<ul class="drop-icon-wrap p-1">
																	<li>
																		<a href="email.html" class="drop-icon-item">
																			<i class="fe fe-mail text-dark"></i>
																			<span class="block"> E-mail</span>
																		</a>
																	</li>
																	<li>
																		<a href="calendar2.html" class="drop-icon-item">
																			<i class="fe fe-calendar text-dark"></i>
																			<span class="block">calendar</span>
																		</a>
																	</li>
																	<li>
																		<a href="maps.html" class="drop-icon-item">
																			<i class="fe fe-map-pin text-dark"></i>
																			<span class="block">map</span>
																		</a>
																	</li>
																	<li>
																		<a href="cart.html" class="drop-icon-item">
																			<i class="fe fe-shopping-cart text-dark"></i>
																			<span class="block">Cart</span>
																		</a>
																	</li>
																	<li>
																		<a href="chat.html" class="drop-icon-item">
																			<i class="fe fe-message-square text-dark"></i>
																			<span class="block">chat</span>
																		</a>
																	</li>
																	<li>
																		<a href="profile.html" class="drop-icon-item">
																			<i class="fe fe-phone-outgoing text-dark"></i>
																			<span class="block">contact</span>
																		</a>
																	</li>
																</ul>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item text-center">View all</a>
															</div>
														</div>
														<div class="dropdown text-center selector">
															<a href="#" class="nav-link leading-none" data-toggle="dropdown">
																<span class="avatar avatar-sm brround cover-image" data-image-src="{{URL::asset('assets/images/faces/female/25.jpg')}}"></span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
																<div class="text-center">
																	<a href="#" class="dropdown-item text-center font-weight-sembold user" data-toggle="dropdown">Joyce Stewart</a>
																	<span class="text-center user-semi-title text-dark">web designer</span>
																	<div class="dropdown-divider"></div>
																</div>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-account-outline"></i> Profile
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon  mdi mdi-settings"></i> Settings
																</a>
																<a class="dropdown-item" href="#">
																	<span class="float-right"><span class="badge badge-primary">6</span></span>
																	<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
																</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
																</a>
																<a class="dropdown-item" href="login.html">
																	<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
																</a>
															</div>
														</div>
													</div>
													<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
														<span class="header-toggler-icon"></span>
													</a>
												</div>
											</div>
										</div>
										<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse2">
											<div class="container">
												<div class="row align-items-center">
													<div class="col-lg order-lg-first">
														<ul class="nav nav-tabs border-0 flex-column flex-lg-row">
															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link " data-toggle="dropdown"><i class="fa fa-desktop"></i>Dashboard </a>
																<div class="dropdown-menu dropdown-menu-arrow" >
																	<a href="index.html" class="dropdown-item ">Dashboard 01</a>
																	<a href="index2.html" class="dropdown-item ">Dashboard 02</a>
																	<a href="index3.html" class="dropdown-item ">Dashboard 03</a>
																	<a href="index4.html" class="dropdown-item ">Dashboard 04</a>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="widgets.html" class="nav-link "><i class="fa fa-window-restore"></i> Widgets</a>
															</li>
															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-tachometer"></i>UI Design</a>
																<div class="dropdown-menu dropdown-menu-arrow mega-menu">
																	<div class="row">
																		<div class="col-md-6">
																			<a href="charts.html" class="dropdown-item ">Graph Charts</a>
																			<a href="chart-line.html" class="dropdown-item ">line Charts</a>
																			<a href="chart-donut.html" class="dropdown-item ">Donut Charts</a>
																			<a href="chart-pie.html" class="dropdown-item ">Pie Charts</a>
																			<a href="cards.html" class="dropdown-item ">Cards design</a>
																			<a href="maps.html" class="dropdown-item ">Maps</a>
																			<a href="sweetalert.html" class="dropdown-item ">Sweet alert</a>
																		</div>
																		<div class="col-md-6">
																			<a href="time-line.html" class="dropdown-item ">Timeline</a>
																			<a href="chat.html" class="dropdown-item ">Default Chat</a>
																			<a href="counters.html" class="dropdown-item ">Counters</a>
																			<a href="loaders.html" class="dropdown-item ">Loaders</a>
																			<a href="notify.html" class="dropdown-item ">Notifications</a>
																			<a href="rangeslider.html" class="dropdown-item ">Range slider</a>
																			<a href="scroll.html" class="dropdown-item ">Content Scroll bar</a>
																		</div>
																	</div>
																</div>
															</li>

															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link active" data-toggle="dropdown"><i class="fa fa-pencil-square-o"></i>UI Elements</a>
																<div class="dropdown-menu dropdown-menu-arrow mega-menu">
																	<div class="row">
																		<div class="col-md-6">
																			<a href="alerts.html" class="dropdown-item ">Alerts</a>
																			<a href="buttons.html" class="dropdown-item ">Buttons</a>
																			<a href="colors.html" class="dropdown-item ">Colors</a>
																			<a href="chart.html" class="dropdown-item ">Sample Charts</a>
																			<a href="avatars.html" class="dropdown-item ">Avatars</a>
																			<a href="avatar-round.html" class="dropdown-item ">RoundAvatars</a>
																			<a href="avatar-radius.html" class="dropdown-item ">RadiusAvatars</a>
																			<a href="accordion.html" class="dropdown-item ">Accordion</a>
																			<a href="dropdown.html" class="dropdown-item ">Dropdown</a>
																			<a href="list.html" class="dropdown-item ">List</a>
																		</div>
																		<div class="col-md-6">
																			<a href="modal.html" class="dropdown-item ">Modal</a>
																			<a href="navigation.html" class="dropdown-item ">Navigation</a>
																			<a href="progress.html" class="dropdown-item ">Progress</a>
																			<a href="typography.html" class="dropdown-item ">Typography</a>
																			<a href="tooltipandpopover.html" class="dropdown-item ">Tooltip & Popover</a>
																			<a href="breadcrumbs.html" class="dropdown-item ">Breadcrumbs</a>
																			<a href="badge.html" class="dropdown-item ">Badges</a>
																			<a href="jumbotron.html" class="dropdown-item ">Jumbotron</a>
																			<a href="panels.html" class="dropdown-item ">Panel</a>
																			<a href="thumbnails.html" class="dropdown-item ">Thumbnails</a>
																		</div>
																	</div>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="mdi mdi-file"></i>Pages</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="profile.html" class="dropdown-item ">Profile</a>
																	<a href="editprofile.html" class="dropdown-item ">Edit Profile</a>
																	<a href="login.html" class="dropdown-item ">Login</a>
																	<a href="register.html" class="dropdown-item ">Register</a>
																	<a href="forgot-password.html" class="dropdown-item ">Forgot password</a>
																	<a href="email.html" class="dropdown-item ">Email</a>
																	<a href="empty.html" class="dropdown-item ">Empty page</a>
																	<a href="construction.html" class="dropdown-item ">Under Construction</a>
																	<a href="lockscreen.html" class="dropdown-item ">Lock screen</a>
																	<a href="400.html" class="dropdown-item ">400 error</a>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="mdi mdi-arrange-send-backward"></i>Forms</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="form-elements.html" class="dropdown-item ">Form Elements</a>
																	<a href="form-wizard.html" class="dropdown-item ">form-wizard Elements</a>
																	<a href="wysiwyag.html" class="dropdown-item ">Text Editor</a>
																</div>
															</li>
															<li class="nav-item">
																<a href="gallery.html" class="nav-link"><i class="fa fa-picture-o"></i> Gallery</a>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-cogs"></i> Components</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="pricing.html" class="dropdown-item ">Pricing tables</a>
																	<a href="crypto-currencies.html" class="dropdown-item ">Crypto-currencies</a>
																	<a href="users-list.html" class="dropdown-item ">User-list</a>
																	<a href="icons.html" class="dropdown-item ">Icons</a>
																	<a href="icons2.html" class="dropdown-item ">Icons 2</a>
																	<a href="tables.html" class="dropdown-item ">Tables</a>
																	<a href="datatable.html" class="dropdown-item ">Data Tables</a>
																	<a href="store.html" class="dropdown-item ">Store</a>
																	<a href="blog.html" class="dropdown-item ">Blog</a>
																	<a href="invoice.html" class="dropdown-item ">Invoice</a>
																	<a href="carousel.html" class="dropdown-item ">Carousel</a>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">With Out Search Boxes And Notification</div>
									</div>
									<div >
										<div class="header p-0 bg-primary">
											<div class="container pl-3 pr-3">
												<div class="d-flex">
													<a class="header-brand" href="index.html">
														<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img" alt="adminor logo">
													</a>
													<div class="d-flex order-lg-2 ml-auto">

														<div class="dropdown mt-2">
															<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
																<span class="avatar avatar-sm brround cover-image" data-image-src="{{URL::asset('assets/images/faces/female/25.jpg')}}"></span>
																<span class="ml-2 d-none d-lg-block">
																	<span class="text-white">Simon	Russell</span>
																</span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-account-outline "></i> Profile
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon  mdi mdi-settings"></i> Settings
																</a>
																<a class="dropdown-item" href="#">
																	<span class="float-right"><span class="badge badge-primary">6</span></span>
																	<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
																</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
																</a>
																<a class="dropdown-item" href="login.html">
																	<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
																</a>
															</div>
														</div>
													</div>
													<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse3">
														<span class="header-toggler-icon"></span>
													</a>
												</div>
											</div>
										</div>
										<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse3">
											<div class="container">
												<div class="row align-items-center">
													<div class="col-lg order-lg-first">
														<ul class="nav nav-tabs border-0 flex-column flex-lg-row">
															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link " data-toggle="dropdown"><i class="fa fa-desktop"></i>Dashboard </a>
																<div class="dropdown-menu dropdown-menu-arrow" >
																	<a href="index.html" class="dropdown-item ">Dashboard 01</a>
																	<a href="index2.html" class="dropdown-item ">Dashboard 02</a>
																	<a href="index3.html" class="dropdown-item ">Dashboard 03</a>
																	<a href="index4.html" class="dropdown-item ">Dashboard 04</a>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="widgets.html" class="nav-link "><i class="fa fa-window-restore"></i> Widgets</a>
															</li>
															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-tachometer"></i>UI Design</a>
																<div class="dropdown-menu dropdown-menu-arrow mega-menu">
																	<div class="row">
																		<div class="col-md-6">
																			<a href="charts.html" class="dropdown-item ">Graph Charts</a>
																			<a href="chart-line.html" class="dropdown-item ">line Charts</a>
																			<a href="chart-donut.html" class="dropdown-item ">Donut Charts</a>
																			<a href="chart-pie.html" class="dropdown-item ">Pie Charts</a>
																			<a href="cards.html" class="dropdown-item ">Cards design</a>
																		</div>
																		<div class="col-md-6">
																			<a href="time-line.html" class="dropdown-item ">Timeline</a>
																			<a href="chat.html" class="dropdown-item ">Default Chat</a>
																			<a href="counters.html" class="dropdown-item ">Counters</a>
																			<a href="loaders.html" class="dropdown-item ">Loaders</a>
																			<a href="notify.html" class="dropdown-item ">Notifications</a>
																		</div>
																	</div>
																</div>
															</li>

															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link active" data-toggle="dropdown"><i class="fa fa-pencil-square-o"></i>UI Elements</a>
																<div class="dropdown-menu dropdown-menu-arrow mega-menu">
																	<div class="row">
																		<div class="col-md-6">
																			<a href="alerts.html" class="dropdown-item ">Alerts</a>
																			<a href="buttons.html" class="dropdown-item ">Buttons</a>
																			<a href="colors.html" class="dropdown-item ">Colors</a>
																			<a href="chart.html" class="dropdown-item ">Sample Charts</a>
																			<a href="avatars.html" class="dropdown-item ">Avatars</a>
																			<a href="avatar-round.html" class="dropdown-item ">RoundAvatars</a>
																		</div>
																		<div class="col-md-6">
																			<a href="modal.html" class="dropdown-item ">Modal</a>
																			<a href="navigation.html" class="dropdown-item ">Navigation</a>
																			<a href="progress.html" class="dropdown-item ">Progress</a>
																			<a href="typography.html" class="dropdown-item ">Typography</a>
																			<a href="tooltipandpopover.html" class="dropdown-item ">Tooltip & Popover</a>
																			<a href="breadcrumbs.html" class="dropdown-item ">Breadcrumbs</a>
																		</div>
																	</div>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="mdi mdi-file"></i>Pages</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="profile.html" class="dropdown-item ">Profile</a>
																	<a href="editprofile.html" class="dropdown-item ">Edit Profile</a>
																	<a href="login.html" class="dropdown-item ">Login</a>
																	<a href="register.html" class="dropdown-item ">Register</a>
																	<a href="400.html" class="dropdown-item ">400 error</a>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="mdi mdi-arrange-send-backward"></i>Forms</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="form-elements.html" class="dropdown-item ">Form Elements</a>
																	<a href="form-wizard.html" class="dropdown-item ">form-wizard Elements</a>
																	<a href="wysiwyag.html" class="dropdown-item ">Text Editor</a>
																</div>
															</li>
															<li class="nav-item">
																<a href="gallery.html" class="nav-link"><i class="fa fa-picture-o"></i>Gallery</a>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-cogs"></i> Components</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="pricing.html" class="dropdown-item ">Pricing tables</a>
																	<a href="crypto-currencies.html" class="dropdown-item ">Crypto-currencies</a>
																	<a href="users-list.html" class="dropdown-item ">User-list</a>
																	<a href="icons.html" class="dropdown-item ">Icons</a>
																	<a href="tables.html" class="dropdown-item ">Tables</a>
																	<a href="store.html" class="dropdown-item ">Store</a>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">With Out Navigation Icons</div>
									</div>
									<div>
										<div class="header p-0 bg-primary">
											<div class="container pl-3 pr-3">
												<div class="d-flex">
													<a class="header-brand" href="index.html">
														<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img" alt="adminor logo">
													</a>
													<div class="d-flex order-lg-2 ml-auto">
														<div class="dropdown mt-2">
															<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
																<span class="avatar avatar-sm brround cover-image" data-image-src="{{URL::asset('assets/images/faces/female/25.jpg')}}"></span>
																<span class="ml-2 d-none d-lg-block">
																	<span class="text-white">Simon	Russell</span>
																</span>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-account-outline "></i> Profile
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon  mdi mdi-settings"></i> Settings
																</a>
																<a class="dropdown-item" href="#">
																	<span class="float-right"><span class="badge badge-primary">6</span></span>
																	<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
																</a>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
																</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#">
																	<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
																</a>
																<a class="dropdown-item" href="login.html">
																	<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
																</a>
															</div>
														</div>
													</div>
													<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse4">
														<span class="header-toggler-icon"></span>
													</a>
												</div>
											</div>
										</div>
										<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse4">
											<div class="container">
												<div class="row align-items-center">
													<div class="col-lg order-lg-first">
														<ul class="nav nav-tabs border-0 flex-column flex-lg-row">
															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link " data-toggle="dropdown">Dashboard </a>
																<div class="dropdown-menu dropdown-menu-arrow" >
																	<a href="index.html" class="dropdown-item ">Dashboard 01</a>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="widgets.html" class="nav-link ">Widgets</a>
															</li>
															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown">UI Design</a>
																<div class="dropdown-menu dropdown-menu-arrow mega-menu">
																	<div class="row">
																		<div class="col-md-6">
																			<a href="charts.html" class="dropdown-item ">Graph Charts</a>
																		</div>
																		<div class="col-md-6">
																			<a href="time-line.html" class="dropdown-item ">Timeline</a>
																		</div>
																	</div>
																</div>
															</li>

															<li class="nav-item">
																<a href="javascript:void(0)" class="nav-link active" data-toggle="dropdown">UI Elements</a>
																<div class="dropdown-menu dropdown-menu-arrow mega-menu">
																	<div class="row">
																		<div class="col-md-6">
																			<a href="alerts.html" class="dropdown-item ">Alerts</a>
																			<a href="buttons.html" class="dropdown-item ">Buttons</a>
																		</div>
																		<div class="col-md-6">
																			<a href="modal.html" class="dropdown-item ">Modal</a>
																			<a href="navigation.html" class="dropdown-item ">Navigation</a>
																		</div>
																	</div>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown">Pages</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="profile.html" class="dropdown-item ">Profile</a>
																	<a href="editprofile.html" class="dropdown-item ">Edit Profile</a>
																</div>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown">Forms</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="form-elements.html" class="dropdown-item ">Form Elements</a>
																	<a href="form-wizard.html" class="dropdown-item ">form-wizard Elements</a>
																</div>
															</li>
															<li class="nav-item">
																<a href="gallery.html" class="nav-link">Gallery</a>
															</li>
															<li class="nav-item">
																<a href="profile.html" class="nav-link">Profile</a>
															</li>
															<li class="nav-item dropdown">
																<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"> Components</a>
																<div class="dropdown-menu dropdown-menu-arrow">
																	<a href="pricing.html" class="dropdown-item ">Pricing tables</a>
																</div>
															</li>
														</ul>
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