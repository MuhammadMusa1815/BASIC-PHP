<!DOCTYPE html>
<html>
<head>
	<style>
	#btn {
		width: 177px;
		margin-left: 10px;
		margin-bottom: 30px;
		background-color: yellow ;
		color: blue;
	}
	fieldset {
		background-color: red;
		border: 5px solid blue;
		color: yellow;
		border-radius: 100px;
		width: 500px;
		height: 600px;
	}
	legend {
		color: greenyellow;
		font-size: 40px;
		background-color: brown;
		border: 2px dotted black;
		border-radius: 50px;
		padding: 10px;
	}
	input{
		border-radius: 20px;
		height: 30px;
	}
	textarea{
		border-radius: 20px;
	}
</style>
	</head>
	<body style="background-color: deepskyblue;">
	<center>
		<fieldset>
			<legend style="text-align: center;">
				Registration Form
			</legend>
			<form action="action.php" method="post">
				<br><br><br>
				<input type="text" placeholder="First name" name="fname"><br><br><br><br>

				<input type="text" placeholder="Last Name" name="lname"><br><br><br><br>

				<input type="password" name="pass" placeholder="Password"><br><br><br><br>

				<input type="number" name="int" placeholder="Mobile No"><br><br><br><br>

				<textarea  name="address" rows="3" cols="25" placeholder="Address"></textarea>
				<br><br><br>

				<input type="submit" name="submit" value="Submit" id="btn">


			</form>
		</fieldset>
	</center>
</body>
</html>