<div class="admin-navbar sticky" id="headerMenuCollapse">
					<div class="container">
						<ul class="nav">
							<li class="nav-item with-sub">
								<a class="nav-link" href="{{ url('/' . $page='#') }}">
									<i class="fa fa-desktop"></i>
									<span> Dashboard</span>
								</a>
								<div class="sub-item">
									<ul>
										<li>
											<a href="{{ url('/' . $page='index') }}">Dashboard 1</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='index2') }}">Dashboard 2</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='index3') }}">Dashboard 3</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='index4') }}">Dashboard 4</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='index5') }}">Dashboard 5</a>
										</li>
									</ul>
								</div><!-- sub-item -->
							</li>
							<li class="nav-item with-sub">
								<a class="nav-link" href="{{ url('/' . $page='#') }}"><i class="fa fa-area-chart"></i> <span>Charts</span></a>
								<div class="sub-item">
									<ul>
										<li>
											<a href="{{ url('/' . $page='chart-chartist') }}">Chartjs Charts </a>
										</li>
										<li>
											<a href="{{ url('/' . $page='chart-dygraph') }}">Dygraph Charts</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='chart-echart') }}">Echart Charts</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='chart-flot') }}">Flot Charts</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='chart-nvd3') }}">Nvd3 Charts</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='chart-morris') }}">Morris Charts</a>
										</li>
										<li class="sub-with-sub">
											<a href="{{ url('/' . $page='#') }}">C3 Charts</a>
											<ul>
												<li>
													<a href="{{ url('/' . $page='charts') }}">C3 Bar Charts</a>
												</li>
												<li>
													<a href="{{ url('/' . $page='chart-line') }}">C3 Line Charts</a>
												</li>
												<li>
													<a href="{{ url('/' . $page='chart-donut') }}">C3 Donut Charts</a>
												</li>
												<li>
													<a href="{{ url('/' . $page='chart-pie') }}">C3 Pie charts</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
								<!-- dropdown-menu -->
							</li>

							<li class="nav-item with-sub">
								<a class="nav-link" href="{{ url('/' . $page='#') }}"><i class="fa fa-tachometer"></i> <span>UI Design</span></a>
								<div class="sub-item">
									<ul>
										<li>
											<a href="{{ url('/' . $page='widgets') }}">Widgets</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='cards') }}">Cards design</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='chat') }}">Default Chat</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='notify') }}">Notifications</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='sweetalert') }}">Sweet alerts</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='rangeslider') }}">Range slider</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='scroll') }}">Content Scroll bar</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='counters') }}">Counters</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='rating') }}">Rating </a>
										</li>
									</ul>
								</div>
								<!-- dropdown-menu -->
							</li>
							<li class="nav-item with-sub mega-dropdown">
								<a class="nav-link" href="{{ url('/' . $page='#') }}"><i class="mdi mdi-buffer" title="si-note"></i><span>UI Elements</span></a>
								<div class="sub-item">
									<div class="row">
										<div class="col-lg-12">
											<label class="section-label">Basic Elements</label>
											<div class="row">
												<div class="col">
													<ul>
														<li>
															<a href="{{ url('/' . $page='alerts') }}">Alerts</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='buttons') }}">Buttons</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='colors') }}">Colors</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='avatarsquare') }}">Avatar-Square</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='avatar-round') }}">Avatar-Rounded</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='avatar-radius') }}">Avatar-Radius</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='dropdown') }}">Drop downs</a>
														</li>
													</ul>
												</div>
												<div class="col-lg">
													<ul>
														<li>
															<a href="{{ url('/' . $page='list') }}">List</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='tags') }}">Tags</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='pagination') }}">Pagination</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='navigation') }}">Navigation</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='typography') }}">Typography</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='breadcrumbs') }}">Breadcrumbs</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='badge') }}">Badges</a>
														</li>

													</ul>
												</div><!-- col -->
												<div class="col-lg mg-t-30 mg-lg-t-0">
													<ul>
														<li>
															<a href="{{ url('/' . $page='jumbotron') }}">Jumbotron</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='panels') }}">Panels</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='thumbnails') }}">Thumbnails</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='mediaobject') }}">Media Object</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='accordion') }}">Accordions</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='tabs') }}">Tabs</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='chart') }}">Charts</a>
														</li>
													</ul>
												</div><!-- col -->
												<div class="col-lg mg-t-30 mg-lg-t-0">
													<ul>
														<li>
															<a href="{{ url('/' . $page='modal') }}">Modal</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='tooltipandpopover') }}">Tooltip and popover</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='progress') }}">Progress</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='carousel') }}">Carousels</a>
														</li>
														<li>
															<a href="{{ url('/' . $page='headers') }}">Headers  </a>
														</li>
														<li>
															<a href="{{ url('/' . $page='footers') }}">Footers  </a>
														</li>
														<li>
															<a href="{{ url('/' . $page='loaders') }}">Loaders</a>
														</li>
													</ul>
												</div><!-- col -->

											</div><!-- row -->
										</div><!-- col -->
									</div><!-- row -->
								</div>
								<!-- dropdown-menu -->
							</li>
							<li class="nav-item with-sub">
								<a class="nav-link" href="{{ url('/' . $page='#') }}"><i class="mdi mdi-file"></i><span>Pages</span></a>
								<div class="sub-item">
									<ul>
										<li class="sub-with-sub">
											<a href="{{ url('/' . $page='#') }}">Profile </a>
											<ul>
												<li>
													<a href="{{ url('/' . $page='profile') }}">Profile</a>
												</li>
												<li>
													<a href="{{ url('/' . $page='editprofile') }}">Edit Profile</a>
												</li>
											</ul>
										</li>
										<li class="sub-with-sub">
											<a href="{{ url('/' . $page='#') }}">Email </a>
											<ul>
												<li>
													<a href="{{ url('/' . $page='email') }}">Email</a>
												</li>
												<li>
													<a href="{{ url('/' . $page='emailservices') }}">Email Inbox</a>
												</li>
											</ul>
										</li>
										<li class="sub-with-sub">
											<a href="{{ url('/' . $page='#') }}">E-commerce </a>
											<ul>
												<li>
													<a href="{{ url('/' . $page='shop') }}">Products</a>
												</li>
												<li>
													<a href="{{ url('/' . $page='shop-description') }}">Product Details</a>
												</li>
												<li>
													<a href="{{ url('/' . $page='cart') }}">Shopping Cart</a>
												</li>
											</ul>
										</li>
										<li class="sub-with-sub">
											<a href="{{ url('/' . $page='#') }}">User Pages</a>
											<ul>
												<li>
													<a href="{{ url('/' . $page='login') }}">Login</a>
												</li>
												<li>
													<a href="{{ url('/' . $page='register') }}">Register</a>
												</li>
												<li>
													<a href="{{ url('/' . $page='forgot-password') }}">Forgot password</a>
												</li>
												<li>
													<a href="{{ url('/' . $page='lockscreen') }}">Lock screen</a>
												</li>
												<li>
													<a href="{{ url('/' . $page='empty') }}">Empty Page</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="{{ url('/' . $page='construction') }}">Under Construction</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='gallery') }}">Gallery</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='about') }}">About Company </a>
										</li>
										<li>
											<a href="{{ url('/' . $page='company-history') }}">Company History </a>
										</li>
										<li>
											<a href="{{ url('/' . $page='services') }}">Services </a>
										</li>
										<li>
											<a href="{{ url('/' . $page='faq') }}">FAQS </a>
										</li>
										<li>
											<a href="{{ url('/' . $page='terms') }}">Terms</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='invoice') }}">Invoice</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='pricing') }}">Pricing Tables</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='blog') }}">Blog</a>
										</li>
										<li class="sub-with-sub">
											<a href="{{ url('/' . $page='#') }}">Error Pages</a>
											<ul>
												<li>
													<a href="{{ url('/' . $page='400') }}">400 Error</a>
												</li>
												<li>
													<a href="{{ url('/' . $page='401') }}">401 Error</a>
												</li>
												<li>
													<a href="{{ url('/' . $page='403') }}">403 Error</a>
												</li>
												<li>
													<a href="{{ url('/' . $page='404') }}">404 Error</a>
												</li>
												<li>
													<a href="{{ url('/' . $page='500') }}">500 Error</a>
												</li>
												<li>
													<a href="{{ url('/' . $page='503') }}">503 Error</a>
												</li>
											</ul>
										</li>

									</ul>
								</div>
								<!-- dropdown-menu -->
							</li>
							<li class="nav-item with-sub">
								<a class="nav-link" data-toggle="dropdown" href="{{ url('/' . $page='#') }}"><i class="mdi mdi-arrange-send-backward"></i> <span>Form Elements</span></a>
								<div class="sub-item">
									<ul>
										<li>
											<a href="{{ url('/' . $page='form-elements') }}">Form Elements</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='form-wizard') }}">wizard Elements</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='wysiwyag') }}">Text Editor</a>
										</li>
									</ul>
								</div>
								<!-- dropdown-menu -->
							</li>
							<li class="nav-item with-sub ">
								<a class="nav-link " data-toggle="dropdown" href="{{ url('/' . $page='#') }}"><i class="fa fa-cogs"></i> <span>Components</span></a>
								<div class="sub-item">
									<ul>
										<li>
											<a href="{{ url('/' . $page='maps') }}">Maps</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='crypto-currencies') }}">Crypto-currencies</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='users-list') }}">User List</a>
										</li>
										<li class="sub-with-sub">
											<a href="{{ url('/' . $page='#') }}">Calendar </a>
											<ul>
												<li>
													<a href="{{ url('/' . $page='calendar') }}">Default calendar</a>
												</li>
												<li>
													<a href="{{ url('/' . $page='calendar2') }}">Full calendar</a>
												</li>
											</ul>
										</li>
										<li class="sub-with-sub">
											<a href="{{ url('/' . $page='#') }}">Tables</a>
											<ul>
												<li>
													<a href="{{ url('/' . $page='tables') }}">Default table</a>
												</li>
												<li>
													<a href="{{ url('/' . $page='datatable') }}">Data Table</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="{{ url('/' . $page='search') }}">Search page</a>
										</li>
									</ul>
								</div><!-- dropdown-menu -->
							</li>
							<li class="nav-item with-sub">
								<a class="nav-link" data-toggle="dropdown" href="{{ url('/' . $page='#') }}"><i class="fa fa-bandcamp"></i> <span>Icons</span></a>
								<div class="sub-item">
									<ul>
										<li>
											<a href="{{ url('/' . $page='icons') }}">Font Awesome</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='icons2') }}">Material Design Icons</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='icons3') }}">Simple Line Iocns</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='icons4') }}">Feather Icons</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='icons5') }}">Ionic Icons</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='icons6') }}">Flag Icons</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='icons7') }}">pe7 Icons</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='icons8') }}">Themify Icons</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='icons9') }}">Typicons Icons</a>
										</li>
										<li>
											<a href="{{ url('/' . $page='icons10') }}">Weather Icons</a>
										</li>
									</ul>
								</div>
								<!-- dropdown-menu -->
							</li>
						</ul>
					</div>
				</div>
