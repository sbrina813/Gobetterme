<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Go Better ME</title>
	<link rel="stylesheet" href="/css/app.css">
	<script src="/js/jquery-2.2.4.min.js"></script>
	<script src="/js/semantic.min.js"></script>
</head>
<body>
	<div class="better-me container">
		<div class="sidebar col-md-3 col-sm-3">
			<div class="head-icon">
				<img src="/img/head.png" alt="head-icon">
			</div>
			<a href="/"><i class="dashboard icon"></i> Dashboard</a>
			<a href="/"><i class="dashboard icon"></i> Dashboard</a>
			<a href="/"><i class="dashboard icon"></i> Dashboard</a>
		</div><!-- end .sidebar -->
		@yield('content')
	</div>	
</body>
</html>