<!DOCTYPE html>
<html>
<head>
	<title>Online voting system</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="style.css">
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<script src="{{ mix('js/app.js') }}"></script>
	
</head>
<body>

<div class="top">
	<div class="row">
		<div class="col-md-4">
      <a href="{{url('/')}}" > <img src="{{'images/last.png'}}" alt=""></a>
		
	  	
		@yield('pagetitle')
		</div>
	</div>
	
</div>

@yield('content')


<div class="footer">
	<div class="row">

@yield('footer')


	</div>
</div>
</body>
<script type='text/javascript' src="{{ asset('js/somejs.js') }}">
</html>