<!DOCTYPE html>
<html>
<body>

<h2>Insert New Employee</h2>
<form method="post" action="inserted_emp">
	Social Security Number (e.g. XXXX-XXXX):
	<input type="text" name="ssn" value="" maxlength="9" required /><br><br>

	First Name:
	<input type="text" name="fname" value="" maxlength="20" required /><br><br>

	Middle Initial:
	<input type="text" name="minit" value="" maxlength="1" /><br><br>

	Last Name:
	<input type="text" name="lname" value="" maxlength="20" required /><br><br>

	Date of Birth (in mmddyyyy format):
	<input type="text" name="dob" value="" maxlength="8" /><br><br>

	Address:
	<input type="text" name="address" value="" maxlength="50" /><br><br>

	<div><input type="submit" value="Submit" /><div>
</form>

</body>
</html>