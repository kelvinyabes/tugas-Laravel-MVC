<!DOCTYPE html>

<html>
	<head>
		<title> Buat Account Baru </title>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<!-- Bagian Heading -->
		<div>
			<h1>Buat Account Baru!</h1>
			<h3>Sign Up Form</h3>
		</div>

		<!-- bagian form -->
		<form action="/welcome" method="POST">
			@csrf
			<label for="firstname">First Name: </label><br><br>
			<input type="text" id="firstname" name="firstname">
			<br><br>
			<label for="lastname">Last Name: </label><br><br>
			<input type="text" id="lastname" name="lastname">
			<br><br>
			
			<label>Gender:</label><br><br>
			<input type="radio" name="gender" value="0">Male<br>
			<input type="radio" name="gender" value="1">Female<br>
			<input type="radio" name="gender" value="2">Other<br>
			<br>

			<label>Nationality:</label><br><br>
			<select>
					<option value="indonesian">Indonesian</option><br>
					<option value="singapore">Singapore</option><br>	
					<option value="malaysian">Malaysian</option><br>
					<option value="japan">Japan</option>
			</select>
			<br><br>

			<label>Language Spoken</label><br>
				<input type="checkbox" name="language" value="0">Bahasa Indonesia<br> 
				<input type="checkbox" name="language" value="1">English<br>
				<input type="checkbox" name="language" value="2">Other<br>
			<br>

			<label for="bio">Bio</label><br>
			<textarea cols="50" rows="7" id="pesan"></textarea>
			<br>
			<input type="submit" value="Sign Up">
		</form>
	</body>

</html>