<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{Asset('assets/css/bootstrap1.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{Asset('assets/css/Dangky.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{Asset('assets/css/theme.css')}}"/>
	
   
    
    
	

	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

</head>
<body>
  
   	@yield("content")
</body>
</html>
