<!DOCTYPE html>
<html>
<body>

<h2>Insert New Employee Dependent</h2>
<form method="post" action="inserted_dependent">

	Employee's Social Security Number:
<?php

	$this->load->database();
	$query = $this->db->query("SELECT ssn FROM Employee;");

	echo "<select name='ssn'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->ssn . "</option>";
	}
	echo "</select>";

?><br><br>
	
	Dependent's Full Name:<br>
	<input type="text" name="depname" value="" maxlength="20" required /><br><br>
	
	Relationship to Employee (e.g. Spouse, Son, Daughter, etc.):<br>
	<input type="text" name="rel" value="" maxlength="15" required /><br><br>

	<div><input type="submit" value="Submit" /><div>
	<br><br>

</form>

</body>
</html>
