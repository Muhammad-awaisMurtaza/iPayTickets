@extends('layouts.master2')
@section('css')
@endsection
@section('content')
		<div class="page h-100">
			<div class="page-content error-page">
				<div class="container text-center">
					<div class="error-template">
						<h1 class="display-1 text-white mb-5">
							Oops!</h1>
						<h2 class="h2  mb-3 text-transparent">
							400 Error</h2>
						<div class="error-details text-transparent">
							Sorry, an error has occured, Requested page not found!
						</div>
						<div class="error-actions mt-5">
							<a class="btn btn-secondary" href="{{ url('/' . $page='index') }}">
								Back To Home
							</a>
					    </div>
                    </div>
				</div>
			</div>
		</div>
@endsection
@section('js')
@endsection