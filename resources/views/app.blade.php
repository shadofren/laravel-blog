<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link rel="stylesheet" href="/css/all.css"></head>
<body>
	@include('partials.nav')
	<div class="container">
		@include('vendor.flash.message')

		@yield('content')
	</div>

	<script src="/js/all.js"></script>

	<script type="text/javascript">
		$('#flash-overlay-modal').modal();
		//$('div.alert').not('.alert-important').delay(3000).slideUp();
	</script>

	@yield('footer')
</body>
</html>