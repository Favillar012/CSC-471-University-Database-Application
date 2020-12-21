<!DOCTYPE html>
<html>
<body>

<?php

$locname = $_POST["locname"];

$this->load->database();

$myquery = $this->db->query("SELECT * FROM Location WHERE locName = '$locname';");

$myrow = $myquery->first_row('array');

$oldlocname = $myrow['locName'];
$address = $myrow['address'];
$deptnum = $myrow['deptNum'];

echo "

<h2>Update Location</h2>
<h4>Update the location's information below. The fields contain the current information:</h4>

<h4>Note: The Department's number cannot be changed.</h4>

<form method='post' action='updated_location'>

	Original Location Name:
	<input type='radio' name='oldlocname' value='$oldlocname' checked> $oldlocname<br><br>

	Department Number:
	<input type='radio' name='deptnum' value='$deptnum' checked> $deptnum<br><br>
	
	Location Name:
	<input type='text' name='locname' value='$locname' maxlength='20' required /><br><br>

	Location Address:
	<input type='text' name='address' value='$address' maxlength='50' /><br><br>

	<div><input type='submit' value='Submit' /><div>
</form>

";

?>

</body>
</html>
