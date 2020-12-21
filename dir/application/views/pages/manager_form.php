<!DOCTYPE html>
<html>
<body>

<h2>Insert New Manager</h2>
<form method="post" action="inserted_manager">

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

	<div><input type="submit" value="Submit" /><div>

</form>
