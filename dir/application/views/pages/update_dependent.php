<!DOCTYPE html>
<html>
<body>

<?php

$ssn = $_POST["ssn"];

$this->load->database();

$myquery = $this->db->query("SELECT * FROM Dependent WHERE ssn = '$ssn';");

$myrow = $myquery->first_row('array');

$name = $myrow['name'];
$relationship = $myrow['relationship'];

echo "

<h2>Update Depedent</h2>
<h4>Update the dependent's information below. The fields contain the current information:</h4>

<h4>Note: The Employee's SSN cannot be changed.</h4>

<form method='post' action='updated_dependent'>

	Social Security Number:
	<input type='radio' name='ssn' value='$ssn' checked> $ssn<br><br>
	
	Dependent's Full Name:
	<input type='text' name='name' value='$name' maxlength='20' required /><br><br>

	Relationship:
	<input type='text' name='relationship' value='$relationship' maxlength='20' /><br><br>

	<div><input type='submit' value='Submit' /><div>
</form>

";

?>

</body>
</html>
