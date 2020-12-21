<!DOCTYPE html>
<html>
<body>

<h2>Create New Department-Project Relationship</h2>
<form method="post" action="inserted_parti">
		
	Department Number:
<?php

	$this->load->database();
	$query = $this->db->query("SELECT deptNum FROM Department;");

	echo "<select name='deptnum'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->deptNum . "</option>";
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
