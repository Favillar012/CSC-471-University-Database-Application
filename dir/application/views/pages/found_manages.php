<!DOCTYPE html>
<html>
<body>

<?php

$deptnum = $_POST["deptnum"];

echo "<h3>Finding a Manager-Department Relationship</h3><h4>Found:</h4>";

$this->load->database();

$query = $this->db->query("SELECT * FROM manages WHERE deptNum = '$deptnum';");

foreach ($query->result() as $row) {
	echo "SSN: " . $row->ssn . "<br>";
	echo "Department Number: " . $row->deptNum . "<br><br>" ;
}

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
