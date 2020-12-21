<!DOCTYPE html>
<html>
<body>

<?php

$deptnum = $_POST["deptnum"];

echo "<h3>Finding a Department</h3><h4>Found:</h4>";

$this->load->database();

$query = $this->db->query("SELECT * FROM Department WHERE deptNum = '$deptnum';");

foreach ($query->result() as $row) {
	echo "Department Number: " . $row->deptNum . "<br>";
	echo "Department Name: " . $row->deptName . "<br>" ;
}

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
