<!DOCTYPE html>
<html>
<body>

<?php

$deptnum = $_POST["deptnum"];

$this->load->database();

$myquery = $this->db->query("SELECT * FROM Department WHERE deptNum = '$deptnum';");

$myrow = $myquery->first_row('array');

$deptname = $myrow['deptName'];

echo "

<h2>Update Department</h2>
<h4>Update the department's information below. The fields contain the current information:</h4>

<h4>Note: The Department's number cannot be changed.</h4>

<form method='post' action='updated_department'>

	Department Number:
	<input type='radio' name='deptnum' value='$deptnum' checked>$deptnum<br><br>
	
	Department Name:
	<input type='text' name='deptname' value='$deptname' maxlength='20' required /><br><br>

	<div><input type='submit' value='Submit' /><div>
</form>

";

?>

</body>
</html>
