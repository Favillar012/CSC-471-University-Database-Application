<!DOCTYPE html>
<html>
<body>

<h2>Insert Salaried Employee</h2>
<form method="post" action="inserted_salariedemp">

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

	Salary:
	<input type="number" name="salary" value="" min="40000" max="500000" /><br><br>

	<div><input type="submit" value="Submit" /><div>

</form>
