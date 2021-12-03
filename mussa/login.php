<!DOCTYPE html>
<html>
<head>
	
	<style>
	fieldset {
		background-color: lightblue;
		color: red;
		border: 4px dotted green;
	}
	legend {
		font-family: Arial;
	}
</style>
</head>
<center>
	<fieldset>
		<legend>Login</legend>
		<form action="check.php" method="post">
			Email:
			<input type="text" name="email" placeholder="abc@efg.com"><br>

			Password:
			<input type="password" name="password"><br>

			<input type="submit" value="Submit" name="submit">
		</form>
	</fieldset>
</center>

</html>