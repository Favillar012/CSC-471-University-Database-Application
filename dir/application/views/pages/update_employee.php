<!DOCTYPE html>
<html>
<body>

<?php

$ssn = $_POST["ssn"];

$this->load->database();

$myquery = $this->db->query("SELECT * FROM Employee WHERE ssn = '$ssn';");

$myrow = $myquery->first_row('array');

$fname = $myrow['Fname'];
$minit = $myrow['Minit'];
$lname = $myrow['Lname'];
$dob = $myrow['dob'];
$address = $myrow['address'];

echo "

<h2>Update Employee</h2>
<h4>Update the employee's information below. The fields contain the current information:</h4>

<h4>Note: The Employee's SSN cannot be changed.</h4>

<form method='post' action='updated_employee'>

	Social Security Number:
	<input type='radio' name='ssn' value='$ssn' checked> $ssn<br><br>
	
	First Name:
	<input type='text' name='fname' value='$fname' maxlength='20' required /><br><br>

	Middle Initial:
	<input type='text' name='minit' value='$minit' maxlength='1' /><br><br>

	Last Name:
	<input type='text' name='lname' value='$lname' maxlength='20' required /><br><br>

	Date of Birth (in mmddyyyy format):
	<input type='text' name='dob' value='$dob' maxlength='8' /><br><br>

	Address:
	<input type='text' name='address' value='$address' maxlength='50' /><br><br>

	<div><input type='submit' value='Submit' /><div>
</form>

";

?>

</body>
</html>
