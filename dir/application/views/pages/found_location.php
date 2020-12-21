<!DOCTYPE html>
<html>
<body>

<?php

$locname = $_POST["locname"];

echo "<h3>Finding a Location</h3><h4>Found:</h4>";

$this->load->database();

$query = $this->db->query("SELECT * FROM Location WHERE locName = '$locname';");

foreach ($query->result() as $row) {
	echo "Location Name: " . $row->locName . "<br>";
	echo "Location Address: " . $row->address . "<br>" ;
	echo "Department Number: " . $row->deptNum . "<br><br>" ;
}

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
