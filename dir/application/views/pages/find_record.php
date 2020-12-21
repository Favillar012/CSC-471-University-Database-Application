<!DOCTYPE html>
<html>
<body>

<h2>Find a Record</h2>
<p>What kind of record do you need to find? Select an option below:</p><br>

<form method="post" action="frecord_rec">

<select name="recordtype">
	<option value="employee">Employee</option>
	<option value="department">Department</option>
	<option value="project">Project</option>
	<option value="dependent">Employee Dependent</option>
<option value="salariedemp">Salaried Employee</option>
	<option value="hourlyemp">Hourly-Paid Employee</option>
	<option value="manager">Manager</option>
	<option value="manages">Manager-Department Relationship</option>
	<option value="workson">Employee-Project Relationship</option>
	<option value="worksin">Employee-Department Relationship</option>
	<option value="participates">Department-Project Relationship</option>
	<option value="location">Department Location</option>
</select><br><br>

	<div><input type="submit" value="Submit" /><div>
	<br><br>

</form>

</body>
</html>

