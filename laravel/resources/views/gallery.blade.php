<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<h2> Gallery </h2>
</head>
<body> 
	<img src=" {{ asset('images/picky.jpg') }}" width="200" height="250">
	<img src=" {{ asset('images/foto2.jpg') }}" width="200" height="250">
	<img src=" {{ asset('images/night.jpg') }}" width="200" height="250">
	<img src=" {{ asset('images/foto.jpg') }}" width="200" height="250">
	<img src=" {{ asset('images/lala.jpg') }}" width="200" height="250">
	<br>
	<a href="{{ url('index') }}"> Kembali </a>
</body>
</html>