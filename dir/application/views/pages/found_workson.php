<!DOCTYPE html>
<html>
<body>

<?php

$ssn = $_POST["ssn"];

echo "<h3>Finding an Employee-Project Relationship</h3><h4>Found:</h4>";

$this->load->database();

$query = $this->db->query("SELECT * FROM worksOn WHERE ssn = '$ssn';");

foreach ($query->result() as $row) {
	echo "SSN: " . $row->ssn . "<br>";
	echo "Project Name: " . $row->projName . "<br>" ;
	echo "Project Number: " . $row->projNum . "<br><br>";
}

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
