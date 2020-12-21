<!DOCTYPE html>
<html>
<body>

<h2>Create New Employee-Project Relationship</h2>
<form method="post" action="inserted_workson">

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
		
	Project Number:
<?php

	$this->load->database();
	$query = $this->db->query("SELECT projNum FROM Project;");

	echo "<select name='projnum'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->projNum . "</option>";
	}
	echo "</select>";

?><br><br>

	<div><input type="submit" value="Submit" /><div>

</form>
