@extends('layouts.master')
@section('css')
<!-- WYSIWYG Editor css -->
<link href="{{URL::asset('assets/plugins/wysiwyag/richtext-dark.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<div class="page-header">
							<h4 class="page-title">WYSIWYG Editor</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">WYSIWYG</li>
							</ol>
						</div>
@endsection
@section('content')
						<div>
							<div class="card">
								<div class="card-header">
									<div class="card-title">WYSIWYG Editor style1</div>
								</div>
								<div class="card-body">
									<textarea class="content" name="example"></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
@section('js')
<!-- WYSIWYG Editor js -->
<script src="{{URL::asset('assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
<!-- WYSIWYG Editor js -->
<script>
	$(function(e) {
		$('.content').richText();
		$('.content2').richText();
	});
</script>
@endsection