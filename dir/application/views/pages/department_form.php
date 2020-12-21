<!DOCTYPE html>
<html>
<body>

<h2>Insert New Department</h2>
<form method="post" action="inserted_dept">

	Department Number (must be 5 digits):
	<input type="number" name="deptnum" value="" min="10000" max="99999" required /><br><br>
	
	Department Name:
	<input type="text" name="deptname" value="" maxlength="20" required /><br><br>

	<div><input type="submit" value="Submit" /><div>

</form>

</body>
</html>
