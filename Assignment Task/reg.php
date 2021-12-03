<html>
<head>
	<style>
	#btn {
		width: 177px;
		margin-left: 65px;
		background-color: black ;
		color: white;
	}
	fieldset {
		background-color: lightblue;
		border: 5px solid black;
		color: grey;
		border-radius: 20px;
		width: 400px;
		height: 600px;
	}
	legend {
		color: white;
		font-size: 40px;
		background-color: green;
		border: 2px dotted black;
		border-radius: 20px;
		padding: 10px;

	}
</style>
	
</head>
<center>
	<fieldset>
		<legend style="text-align: center;">
				Registration Form
			</legend>
			<form action="reg_check.php" method="post">
				<br><br><br><br>
	
				name:
				<input type="text" name="name"><br><br><br>
				F name:
				<input type="text" name="f_name"><br><br><br>
				Roll No
				<input type="text" name="roll_no"><br><br><br>
				Class
				<input type="text" name="class"><br><br><br>
				<input type="submit" name="submit">
				
				
				


			
			</form>

	
	</fieldset>
	</center>
	</html>