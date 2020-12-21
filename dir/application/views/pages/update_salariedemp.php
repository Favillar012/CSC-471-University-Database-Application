<!DOCTYPE html>
<html>
<body>

<?php

$ssn = $_POST["ssn"];

$this->load->database();

$myquery = $this->db->query("SELECT * FROM salariedEmp WHERE ssn = '$ssn';");

$myrow = $myquery->first_row('array');

$salary = $myrow['salary'];

echo "

<h2>Update Salaried Employee</h2>
<h4>Update the employee's salary below. The field contains the current information:</h4>

<h4>Note: The Employee's SSN cannot be changed.</h4>

<form method='post' action='updated_salariedemp'>

	Social Security Number:
	<input type='radio' name='ssn' value='$ssn' checked> $ssn<br><br>
	
	Salary:
	<input type='number' name='salary' value='$salary' min='40000' max='500000' /><br><br>

	<div><input type='submit' value='Submit' /><div>
</form>

";

?>

</body>
</html>
