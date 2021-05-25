@extends('layouts.master')
@section('css')
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">Badges</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Badges</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-md-12  col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Simple Badges</h3>
									</div>
									<div class="card-body">
										<h1>Example heading <span class="badge badge-default">New</span></h1>
										<h2>Example heading <span class="badge badge-default">New</span></h2>
										<h3>Example heading <span class="badge badge-default">New</span></h3>
										<h4>Example heading <span class="badge badge-default">New</span></h4>
										<h5>Example heading <span class="badge badge-default">New</span></h5>
										<h6>Example heading <span class="badge badge-default">New</span></h6>
									</div>
								</div>
							</div>
							<div class="col-md-12  col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Colored Badges</h3>
									</div>
									<div class="card-body">
										<h1 class="text-blue">Example heading <span class="badge badge-primary">New</span></h1>
										<h2  class="text-red">Example heading <span class="badge badge-danger">New</span></h2>
										<h3  class="text-yellow">Example heading <span class="badge badge-warning">New</span></h3>
										<h4  class="text-green">Example heading <span class="badge badge-success">New</span></h4>
										<h5  class="text-info">Example heading <span class="badge badge-info">New</span></h5>
										<h6  class="text-secondary">Example heading <span class="badge badge-secondary">New</span></h6>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12  col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Contextual variations</h3>
									</div>
									<div class="card-body">
										<span class="badge badge-default mt-2">Default</span>
										<span class="badge badge-primary mt-2">Primary</span>
										<span class="badge badge-success mt-2">Success</span>
										<span class="badge badge-info mt-2">Info</span>
										<span class="badge badge-warning mt-2">Warning</span>
										<span class="badge badge-danger mt-2">Danger</span><br>
										<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span></code></pre></div>
									</div>
								</div>
							</div>
							<div class="col-md-12  col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Pill Badges</h3>
									</div>
									<div class="card-body">
										<span class="badge badge-pill badge-default mt-2">Default</span>
										<span class="badge badge-pill badge-primary mt-2">Primary</span>
										<span class="badge badge-pill badge-success mt-2">Success</span>
										<span class="badge badge-pill badge-info mt-2">Info</span>
										<span class="badge badge-pill badge-warning mt-2">Warning</span>
										<span class="badge badge-pill badge-danger mt-2">Danger</span>
										<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span></code></pre></div>
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