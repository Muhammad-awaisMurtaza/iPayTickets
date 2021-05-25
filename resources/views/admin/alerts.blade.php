@extends('layouts.master')
@section('css')
<!-- Accordion Css -->
<link href="{{URL::asset('assets/plugins/accordion/accordion-dark.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<div class="page-header">
							<h4 class="page-title">Alerts</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Alerts Elements</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Default alerts</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="alert alert-primary" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Primary alert—At vero eos et accusamus praesentium!</div>
												<div class="alert alert-secondary" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Secondary alert—At vero eos et accusamus praesentium!</div>
												<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Success alert—At vero eos et accusamus praesentium!</div>
												<div class="alert alert-info" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Info alert—At vero eos et accusamus praesentium!</div>
												<div class="alert alert-warning" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Warning alert—At vero eos et accusamus praesentium!</div>
												<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Danger alert—At vero eos et accusamus praesentium!</div>
											</div>
											<div class="highlight">
<pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-primary"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  Primary alert—At vero eos et accusamus praesentium!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-secondary"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  Secondary alert—At vero eos et accusamus praesentium!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  Success alert—At vero eos et accusamus praesentium!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  Info alert—At vero eos et accusamus praesentium!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  Warning alert—At vero eos et accusamus praesentium!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  Danger alert—At vero eos et accusamus praesentium!
<span class="nt">&lt;/div&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Links in alerts</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message.</a></div>
												<div class="alert alert-info" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Heads up!</strong> This<a href="#" class="alert-link"> alert needs your attention,</a> but it's not super important.</div>
												<div class="alert alert-warning" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Warning! </strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good.</a></div>
												<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up </a>and try submitting again.</div>

											</div>
											<div class="highlight">
<pre><code class="language-html" data-lang="html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
 <span class="nt">&lt;strong&gt;</span>Well done!<span class="nt">&lt;/strong&gt;</span>You successfully read <span class="s">&lt;a</span> <span class="s">href="#"</span><span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span> this important alert message.<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
 <span class="nt">&lt;strong&gt;</span>Heads up!<span class="nt">&lt;/strong&gt;</span> This <span class="s">&lt;a</span> <span class="s">href="#"</span><span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>alert needs your attention,<span class="nt">&lt;/a&gt;</span> but it's not super important.
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
 <span class="nt">&lt;strong&gt;</span>Warning!<span class="nt">&lt;/strong&gt;</span>Better check yourself, you're<span class="s">&lt;a</span> <span class="s">href="#"</span><span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>not looking too good.<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Oh snap!<span class="nt">&lt;/strong&gt;</span><span class="s">&lt;a</span> <span class="s">href="#"</span><span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>Change a few things up<span class="nt">&lt;/a&gt;</span>and try submitting again.
<span class="nt">&lt;/div&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alert with icon</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Add <code class="highlighter-rouge">.alert-icon</code> class.</p>
											<div class="example">
												<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
												<i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i> Well done! You successfully read this important alert message.</div>
												<div class="alert alert-info" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-bell-o mr-2" aria-hidden="true"></i>Heads up! This alert needs your attention, but it's not super important.</div>
												<div class="alert alert-warning" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-exclamation mr-2" aria-hidden="true"></i> Warning! Better check yourself, you're not looking too good.</div>
												<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-frown-o mr-2" aria-hidden="true"></i>Oh snap!Change a few things up and try submitting again.</div>
											</div>
											<div class="highlight">
<pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-icon alert-success"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check-circle-o mr-2"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/i&gt;</span> Well done! You successfully read this important alert message.
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-icon alert-info"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-bell-o mr-2"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/i&gt;</span> Heads up! This alert needs your attention, but it's not super important.
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-icon alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-exclamation mr-2"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/i&gt;</span>  Warning! Better check yourself, you're not looking too good.
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-icon alert-danger"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-frown-o mr-2"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/i&gt;</span> Oh snap!Change a few things up and try submitting again.
<span class="nt">&lt;/div&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alert with avatar</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
												<div class="example">
												<div class="alert alert-avatar alert-primary alert-dismissible">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/faces/female/14.jpg')}})"></span>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
												</div>
												<div class="alert alert-avatar  alert-success alert-dismissible">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<span class="avatar brround" style="background-image: url({{URL::asset('assets/images/faces/male/5.jpg')}})"></span>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit.
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-avatar alert-primary alert-dismissible"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/14.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-avatar alert-success alert-dismissible"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/5.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
<span class="nt">&lt;/div&gt;</span></code></pre>
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
										<h3 class="card-title">Alerts Popovers</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-2 mt-2 mb-2">
												<button type="button" class="btn btn-success btn-block" data-container="body" data-toggle="popover" data-popover-color="popsuccess" data-placement="bottom" title="alert sucess" data-content="Well done! You successfully read this important alert message..">
													Show success
												</button>
											</div>
											<div class="col-md-2 mt-2 mb-2">
												<button type="button" class="btn btn-info btn-block" data-container="body" data-toggle="popover" data-popover-color="popinfo" data-placement="top" title="alert info" data-content="Heads up! This alert needs your attention, but it's not super important...">
													Show info
												</button>
											</div>
											<div class="col-md-2 mt-2 mb-2">
												<button type="button" class="btn btn-block btn-warning" data-container="body" data-toggle="popover" data-popover-color="popwarning" data-placement="bottom" title="alert warning" data-content="Warning! Best check yo self, you're not looking too good..">
													Show warning
												</button>
											</div>

											<div class="col-md-2 mt-2 mb-2">
												<button type="button" class="btn btn-block btn-danger" data-container="body" data-toggle="popover" data-popover-color="popdanger" data-placement="bottom" title="alert danger" data-content="Oh snap! Change a few things up and try submitting again.">
												Show danger
												</button>
											</div>
											<div class="col-md-2 mt-2 mb-2">
												<button type="button" class="btn btn-block btn-secondary" data-container="body" data-toggle="popover" data-popover-color="popsecondary" data-placement="top" title="alert secondary" data-content="Error! Please Check u r emial id..">
													Show secondary
												</button>
											</div>
											<div class="col-md-2 mt-2 mb-2">
												<button type="button" class="btn btn-block btn-primary" data-container="body"  data-toggle="popover" data-popover-color="pop-primary" data-placement="top" title="alert primary" data-content="Cool! This alert will close in 3 seconds. The data-delay attribute is in milliseconds.">
													Show primary
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alerts style</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-12 col-md-12">
												<div class="alert alert-success">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													 <strong>Success Message</strong>
													<hr class="message-inner-separator">
													<p>You successfully read this important alert message.</p>
												</div>
											</div>
											<div class="col-sm-12 col-md-12">
												<div class="alert alert-info">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<strong>Info Message</strong>
													<hr class="message-inner-separator">
													<p>This alert needs your attention, but it's not super important.</p>
												</div>
											</div>
											<div class="col-sm-12 col-md-12">
												<div class="alert alert-warning">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<strong>Warning Message</strong>
													<hr class="message-inner-separator">
													<p>Best check yo self, you're not looking too good.</p>
												</div>
											</div>
											<div class="col-sm-12 col-md-12">
												<div class="alert alert-danger">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<strong>Danger Message</strong>
													<hr class="message-inner-separator">
													<p>Change a few things up and try submitting again.</p>
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
<!-- popover js -->
<script src="{{URL::asset('assets/js/popover.js')}}"></script>
<!-- Input Mask Plugin -->
<script src="{{URL::asset('assets/plugins/input-mask/jquery.mask.min.js')}}"></script>
@endsection