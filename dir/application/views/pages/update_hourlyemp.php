<!DOCTYPE html>
<html>
<body>

<?php

$ssn = $_POST["ssn"];

$this->load->database();

$myquery = $this->db->query("SELECT * FROM hourEmp WHERE ssn = '$ssn';");

$myrow = $myquery->first_row('array');

$hourpay = $myrow['hourPay'];

echo "

<h2>Update Hourly-Paid Employee</h2>
<h4>Update the employee's hourly wage below. The field contains the current information:</h4>

<h4>Note: The Employee's SSN cannot be changed.</h4>

<form method='post' action='updated_hourlyemp'>

	Social Security Number:
	<input type='radio' name='ssn' value='$ssn' checked> $ssn<br><br>
	
	Hourly Wage:
	<input type='number' name='hourpay' value='$hourpay' min='7.50' max='30.00' step='0.25' /><br><br>

	<div><input type='submit' value='Submit' /><div>
</form>

";

?>

</body>
</html>
