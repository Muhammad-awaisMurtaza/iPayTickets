<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta content="Adminor-Bootstrap HTML Admin Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="admin dashboard,admin dashboard template,admin panel template,admin template,bootstrap 4 dashboard,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap dashboard,bootstrap dashboard template,dashboard design template,dashboard html,dashboard template,html admin template,html dashboard template">
		@include('layouts.head')
	</head>
	
	<body class="login-img">
		<div id="global-loader" ></div>
		@yield('content')		
		@include('layouts.footer-scripts')	
	</body>
</html>