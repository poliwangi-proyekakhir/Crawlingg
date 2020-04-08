<html>
<head>
<title>
Halaman Login
</title>
</head>

<body>
	
		<h1>Halaman Login</h1>
		<p><form action="/beranda/cek_login" method="post">
			{{ csrf_field() }}
			Username:
			<input type="text" name="username"></br>
			Password:
			<input type="password" name="password"></br>
			<input type="submit" value="Masuk"></br>
		</form></p>
</body>


</html>