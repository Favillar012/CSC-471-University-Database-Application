<!DOCTYPE html>
<html>
<body>

<?php

$ssn = $_POST["ssn"];

echo "<h3>Finding an Employee</h3><h4>Found:</h4>";

$this->load->database();

$query = $this->db->query("SELECT * FROM Employee WHERE ssn = '$ssn';");

foreach ($query->result() as $row) {
	echo "SSN: " . $row->ssn . "<br>";
	echo "First Name: " . $row->Fname . "<br>" ;
	echo "Middle Initial: " . $row->Minit . "<br>" ;
	echo "Last Name: " . $row->Lname . "<br>" ;
	echo "Date of Birth: " . $row->dob . "<br>";
	echo "Address: " . $row->address . "<br>";
}

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
