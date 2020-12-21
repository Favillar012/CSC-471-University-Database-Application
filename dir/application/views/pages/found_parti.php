<!DOCTYPE html>
<html>
<body>

<?php

$deptnum = $_POST["deptnum"];

echo "<h3>Finding a Department-Project Relationship</h3><h4>Found:</h4>";

$this->load->database();

$query = $this->db->query("SELECT * FROM participates WHERE deptNum = '$deptnum';");

foreach ($query->result() as $row) {
	echo "Department Number: " . $row->deptNum . "<br>";
	echo "Project Name: " . $row->projName . "<br>" ;
	echo "Project Number: " . $row->projNum . "<br><br>" ;
}

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
