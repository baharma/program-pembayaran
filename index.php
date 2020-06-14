<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<table align="center" class="bagian1">
	<form method="POST" action="proseslogin.php">
		<marquee><h1 align="center">Form Login</h1></marquee>
		<tr>
			<td width="88">
				Username
			</td>
			<td width="13">
				:
			</td>
			<td width="204">
				<input type="text" name="Username" placeholder="Username">
			</td>
		</tr>
		<tr>
			<td>
				Password
			</td>
			<td>
				:
			</td>
			<td>
				<input type="Password" name="Password" placeholder="Password">
			</td>
		</tr>
		<tr>
			<td height="57"></td>
			<td></td>
		  <td><input type="submit" name="submit" value="Login" class="submit"> 
		     <input type="reset" name="reset" value="Hapus" class="submit"></td>
	  </tr>
	</form>
</table>
</body>
</html>