<!DOCTYPE html>
<html lang="en">
<head>
	@include('user.layoutsuser.head')
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">
	@include('user.layoutsuser.header')
	@include('user.layoutsuser.sidebar')
	@section('main-content')
		@show
	@include('user.layoutsuser.footer')
</div>
</body>
</html>