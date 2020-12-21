<!DOCTYPE html>
<html>
<body>

<h2>Insert New Location for a Department</h2>
<form method="post" action="inserted_location">

	Location Name:
	<input type="text" name="locname" maxlength="20" required /><br><br>
	
	Location Address:
	<input type="text" name="locaddress" maxlength="50" /><br><br>
	
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
