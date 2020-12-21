<!DOCTYPE html>
<html>
<body>

<h2>Insert Hourly-Paid Employee</h2>
<form method="post" action="inserted_hourlyemp">

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

	Hourly Wage:
	<input type="number" name="hourpay" value="" min="7.50" max="30.00" step="0.25" /><br><br>

	<div><input type="submit" value="Submit" /><div>

</form>
