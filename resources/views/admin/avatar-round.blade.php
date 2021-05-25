@extends('layouts.master')
@section('css')
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">RoundAvatars</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">RoundAvatars</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row row-deck">
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Simple Round avatar</h4>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar  brround cover-image" data-image-src="{{URL::asset('assets/images/faces/male/12.jpg')}}"></span>
													<span class="avatar  brround cover-image" data-image-src="{{URL::asset('assets/images/faces/male/13.jpg')}}"></span>
													<span class="avatar  brround cover-image" data-image-src= "{{URL::asset('assets/images/faces/female/11.jpg')}}"></span>
													<span class="avatar  brround cover-image" data-image-src= "{{URL::asset('assets/images/faces/female/12.jpg')}}"></span>
													<span class="avatar  brround cover-image" data-image-src= "{{URL::asset('assets/images/faces/male/14.jpg')}}"></span>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar  brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/12.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar  brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/13.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar  brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/11.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar  brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/12.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar  brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/14.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
						    <div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">RoundAvatars list</h4>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/faces/female/12.jpg')}}"></span>
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/faces/female/21.jpg')}}"></span>
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/faces/female/29.jpg')}}"></span>
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/faces/female/2.jpg')}}"></span>
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/faces/male/34.jpg')}}"></span>
													<span class="avatar brround cover-image">+8</span>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"avatar-list avatar-list-stacked"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround cover-image"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/12.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround cover-image"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/21.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround cover-image"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/29.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround cover-image"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/2.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround cover-image"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/34.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround cover-image"</span><span class="nt">&gt;</span>+8<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row row-deck">
						    <div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">RoundAvatar size</h4>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar avatar-sm brround cover-image"  data-image-src="{{URL::asset('assets/images/faces/male/15.jpg')}}"></span>
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/faces/female/13.jpg')}}"></span>
													<span class="avatar avatar-md brround cover-image"  data-image-src="{{URL::asset('assets/images/faces/male/16.jpg')}}"></span>
													<span class="avatar avatar-lg brround cover-image"  data-image-src="{{URL::asset('assets/images/faces/male/17.jpg')}}"></span>
													<span class="avatar avatar-xl brround cover-image"  data-image-src="{{URL::asset('assets/images/faces/female/14.jpg')}}"></span>
													<span class="avatar avatar-xxl brround cover-image"  data-image-src="{{URL::asset('assets/images/faces/male/18.jpg')}}"></span>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-sm brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/15.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround cover-image"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/13.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-md brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/16.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-lg brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/17.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-xl brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/14.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-xxl brround"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/18.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">RoundAvatar status</h4>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/faces/male/19.jpg')}}"></span>
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/faces/female/15.jpg')}}">
														<span class="avatar-status"></span>
													</span>
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/faces/male/20.jpg')}}">
														<span class="avatar-status bg-red"></span>
													</span>
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/faces/female/16.jpg')}}">
														<span class="avatar-status bg-green"></span>
													</span>
													<span class="avatar brround cover-image"  data-image-src="{{URL::asset('assets/images/faces/female/17.jpg')}}">
														<span class="avatar-status bg-yellow"></span>
													</span>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround cover-image"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/19.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround cover-image"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/15.jpg')}})"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround cover-image"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/20.jpg')}})"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status bg-red"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround cover-image"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/16.jpg')}})"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status bg-green"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar brround cover-image"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/17.jpg')}})"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status bg-yellow"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span></code></pre>
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