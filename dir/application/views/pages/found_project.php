<!DOCTYPE html>
<html>
<body>

<?php

$projnum = $_POST["projnum"];

echo "<h3>Finding a Project</h3><h4>Found:</h4>";

$this->load->database();

$query = $this->db->query("SELECT * FROM Project WHERE projNum = '$projnum';");

foreach ($query->result() as $row) {
	echo "Project Number: " . $row->projNum . "<br>";
	echo "Project Name: " . $row->projName . "<br>" ;
}

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
