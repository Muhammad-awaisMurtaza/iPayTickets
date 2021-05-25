@extends('layouts.master')
@section('css')
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">Avatars</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Avatars Styles</li>
							</ol>

						</div>
@endsection
@section('content')
						<div class="row row-deck">
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4  class="card-title">Simple avatar</h4>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar cover-image"  data-image-src="{{URL::asset('assets/images/faces/male/1.jpg')}}"></span>
													<span class="avatar cover-image"  data-image-src="{{URL::asset('assets/images/faces/male/2.jpg')}}"></span>
													<span class="avatar cover-image"  data-image-src="{{URL::asset('assets/images/faces/female/1.jpg')}}"></span>
													<span class="avatar cover-image"  data-image-src="{{URL::asset('assets/images/faces/female/2.jpg')}}"></span>
													<span class="avatar cover-image"  data-image-src="{{URL::asset('assets/images/faces/male/3.jpg')}}"></span>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/1.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/2.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/1.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/2.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/3.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
						    <div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4  class="card-title">Avatars list</h4>
									</div>
									<div class="card-body">
										<div class="text-wrap">

											<div class="example">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar cover-image"  data-image-src="{{URL::asset('assets/images/faces/male/10.jpg')}}"></span>
													<span class="avatar cover-image"  data-image-src="{{URL::asset('assets/images/faces/female/8.jpg')}}"></span>
													<span class="avatar cover-image"  data-image-src="{{URL::asset('assets/images/faces/female/9.jpg')}}"></span>
													<span class="avatar cover-image"  data-image-src="{{URL::asset('assets/images/faces/female/10.jpg')}}"></span>
													<span class="avatar cover-image"  data-image-src="{{URL::asset('assets/images/faces/male/11.jpg')}}"></span>
													<span class="avatar">+8</span>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"avatar-list avatar-list-stacked"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/10.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/8.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/9.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/10.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/11.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span><span class="nt">&gt;</span>+8<span class="nt">&lt;/span&gt;</span>
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
										<h4  class="card-title">Avatar status</h4>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar cover-image"  data-image-src="{{URL::asset('assets/images/faces/male/8.jpg')}}"></span>
													<span class="avatar cover-image"  data-image-src="{{URL::asset('assets/images/faces/female/5.jpg')}}">
														<span class="avatar-status"></span>
													</span>
													<span class="avatar cover-image"  data-image-src="{{URL::asset('assets/images/faces/male/9.jpg')}}">
														<span class="avatar-status bg-red"></span>
													</span>
													<span class="avatar cover-image"  data-image-src="{{URL::asset('assets/images/faces/female/6.jpg')}}">
														<span class="avatar-status bg-green"></span>
													</span>
													<span class="avatar cover-image"  data-image-src="{{URL::asset('assets/images/faces/female/7.jpg')}}">
														<span class="avatar-status bg-yellow"></span>
													</span>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/8.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/5.jpg')}})"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/9.jpg')}})"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status bg-red"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/6.jpg')}})"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status bg-green"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/7.jpg')}})"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status bg-yellow"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
						    <div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4  class="card-title">Avatar size</h4>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar avatar-sm cover-image"  data-image-src="{{URL::asset('assets/images/faces/male/4.jpg')}}"></span>
													<span class="avatar cover-image"  data-image-src="{{URL::asset('assets/images/faces/female/3.jpg')}}"></span>
													<span class="avatar avatar-md cover-image"  data-image-src="{{URL::asset('assets/images/faces/male/5.jpg')}}"></span>
													<span class="avatar avatar-lg cover-image"  data-image-src="{{URL::asset('assets/images/faces/male/6.jpg')}}"></span>
													<span class="avatar avatar-xl cover-image"  data-image-src="{{URL::asset('assets/images/faces/female/4.jpg')}}"></span>
													<span class="avatar avatar-xxl cover-image"  data-image-src="{{URL::asset('assets/images/faces/male/7.jpg')}}"></span>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-sm"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/4.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/3.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-md"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/6.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-lg"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/6.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-xl"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/female/4.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-xxl"</span> <span class="na">style=</span><span class="s">"background-image: url({{URL::asset('assets/images/faces/male/7.jpg')}})"</span><span class="nt">&gt;&lt;/span&gt;</span></code></pre>
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