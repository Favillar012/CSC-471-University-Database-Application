<!DOCTYPE html>
<html>
<body>

<h2>Create New Manager-Department Relationship</h2>
<form method="post" action="inserted_manages">

	Manager's Social Security Number:
<?php

	$this->load->database();
	$query = $this->db->query("SELECT ssn FROM Manager;");

	echo "<select name='ssn'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->ssn . "</option>";
	}
	echo "</select>";

?><br><br>
		
	Department's Number:
<?php

	$this->load->database();
	$query = $this->db->query("SELECT deptNum FROM Department;");

	echo "<select name='deptnum'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->deptNum . "</option>";
	}
	echo "</select>";

?><br><br>

	<div><input type="submit" value="Submit" /><div>

</form>
