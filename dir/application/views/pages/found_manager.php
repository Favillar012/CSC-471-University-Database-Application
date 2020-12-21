<!DOCTYPE html>
<html>
<body>

<?php

$this->load->database();

$ssn = $_POST["ssn"];

echo "<h3>Finding a Manager</h3><h4>Found:</h4>";

$query = $this->db->query("SELECT * FROM Employee WHERE ssn = '$ssn';");

foreach ($query->result() as $row) {
	echo "SSN: " . $row->ssn . "<br>";
	echo "First Name: " . $row->Fname . "<br>";
	echo "Last Name: " . $row->Lname . "<br>";
}

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
