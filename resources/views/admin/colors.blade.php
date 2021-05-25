@extends('layouts.master')
@section('css')
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">Colors</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Colors</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Contextual colors</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>A background fill can be applied to a container using one of the <code class="highlighter-rouge">.bg-[color]</code> classes.</p>
											<div class="example">
												<div class="row">
													<div class="col-md-4">
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-primary rounded mr-4"></div>
															<div>
																<strong>Primary</strong><br />
																<code>.bg-primary</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-info rounded mr-4"></div>
															<div>
																<strong>Info</strong><br />
																<code>.bg-info</code>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-secondary rounded mr-4"></div>
															<div>
																<strong>Secondary</strong><br />
																<code>.bg-secondary</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-warning rounded mr-4"></div>
															<div>
																<strong>Warning</strong><br />
																<code>.bg-warning</code>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-success rounded mr-4"></div>
															<div>
																<strong>Success</strong><br />
																<code>.bg-success</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-danger rounded mr-4"></div>
															<div>
																<strong>Danger</strong><br />
																<code>.bg-danger</code>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-2 mt-2"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-primary rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Primary<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;code&gt;</span>.bg-primary<span class="nt">&lt;/code&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-2 mt-2"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-secondary rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Secondary<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;code&gt;</span>.bg-secondary<span class="nt">&lt;/code&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-2 mt-2"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-success rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Success<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;code&gt;</span>.bg-success<span class="nt">&lt;/code&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-2 mt-2"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-info rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Info<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;code&gt;</span>.bg-info<span class="nt">&lt;/code&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-2 mt-2"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-warning rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Warning<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;code&gt;</span>.bg-warning<span class="nt">&lt;/code&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-2 mt-2"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-danger rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Danger<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;code&gt;</span>.bg-danger<span class="nt">&lt;/code&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Other colors</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Instead of using contextual classes you can use ordinary color names.</p>
											<div class="example">
												<div class="row">
													<div class="col-md-4">
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-blue rounded mr-4"></div>
															<div>
																<strong>Blue</strong><br />
																<code>.bg-blue</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-azure rounded mr-4"></div>
															<div>
																<strong>Azure</strong><br />
																<code>.bg-azure</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-indigo rounded mr-4"></div>
															<div>
																<strong>Indigo</strong><br />
																<code>.bg-indigo</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-purple rounded mr-4"></div>
															<div>
																<strong>Purple</strong><br />
																<code>.bg-purple</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-pink rounded mr-4"></div>
															<div>
																<strong>Pink</strong><br />
																<code>.bg-pink</code>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-red rounded mr-4"></div>
															<div>
																<strong>Red</strong><br />
																<code>.bg-red</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-orange rounded mr-4"></div>
															<div>
																<strong>Orange</strong><br />
																<code>.bg-orange</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-yellow rounded mr-4"></div>
															<div>
																<strong>Yellow</strong><br />
																<code>.bg-yellow</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-lime rounded mr-4"></div>
															<div>
																<strong>Lime</strong><br />
																<code>.bg-lime</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-green rounded mr-4"></div>
															<div>
																<strong>Green</strong><br />
																<code>.bg-green</code>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-teal rounded mr-4"></div>
															<div>
																<strong>Teal</strong><br />
																<code>.bg-teal</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-cyan rounded mr-4"></div>
															<div>
																<strong>Cyan</strong><br />
																<code>.bg-cyan</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-gray rounded mr-4"></div>
															<div>
																<strong>Gray</strong><br />
																<code>.bg-gray</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-gray-dark rounded mr-4"></div>
															<div>
																<strong>Dark gray</strong><br />
																<code>.bg-gray-dark</code>
															</div>
														</div>
														<div class="d-flex align-items-center mb-2 mt-2">
															<div class="w-7 h-7 bg-secondary rounded mr-4"></div>
															<div>
																<strong>Dark blue</strong><br />
																<code>.bg-secondary</code>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4"</span><span class="nt">&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-blue rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Blue<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;code&gt;</span>.bg-blue<span class="nt">&lt;/code&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-azure rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Azure<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;code&gt;</span>.bg-azure<span class="nt">&lt;/code&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-indigo rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Indigo<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;code&gt;</span>.bg-indigo<span class="nt">&lt;/code&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-purple rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Purple<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;code&gt;</span>.bg-purple<span class="nt">&lt;/code&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-pink rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Pink<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;code&gt;</span>.bg-pink<span class="nt">&lt;/code&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4"</span><span class="nt">&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-red rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Red<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;code&gt;</span>.bg-red<span class="nt">&lt;/code&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-orange rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Orange<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;code&gt;</span>.bg-orange<span class="nt">&lt;/code&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-yellow rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Yellow<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;code&gt;</span>.bg-yellow<span class="nt">&lt;/code&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-lime rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Lime<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;code&gt;</span>.bg-lime<span class="nt">&lt;/code&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-green rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Green<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;code&gt;</span>.bg-green<span class="nt">&lt;/code&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4"</span><span class="nt">&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-teal rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Teal<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;code&gt;</span>.bg-teal<span class="nt">&lt;/code&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-cyan rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Cyan<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;code&gt;</span>.bg-cyan<span class="nt">&lt;/code&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-gray rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Gray<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;code&gt;</span>.bg-gray<span class="nt">&lt;/code&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center mb-4"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-7 h-7 bg-gray-dark rounded mr-4"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Dark gray<span class="nt">&lt;/strong&gt;&lt;br</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;code&gt;</span>.bg-gray-dark<span class="nt">&lt;/code&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
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