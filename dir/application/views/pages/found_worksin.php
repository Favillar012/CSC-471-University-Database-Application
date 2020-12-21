<!DOCTYPE html>
<html>
<body>

<?php

$ssn = $_POST["ssn"];

echo "<h3>Finding an Employee-Department Relationship</h3><h4>Found:</h4>";

$this->load->database();

$query = $this->db->query("SELECT * FROM worksIn WHERE ssn = '$ssn';");

foreach ($query->result() as $row) {
	echo "SSN: " . $row->ssn . "<br>";
	echo "Department Number: " . $row->deptNum . "<br><br>" ;
}

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
