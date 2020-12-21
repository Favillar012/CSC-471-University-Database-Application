<!DOCTYPE html>
<html>
<body>

<?php

$ssn = $_POST["ssn"];

echo "<h3>Finding an Hourly-Paid Employee</h3><h4>Found:</h4>";

$this->load->database();

$query = $this->db->query("SELECT * FROM hourEmp WHERE ssn = '$ssn';");

foreach ($query->result() as $row) {
	echo "SSN: " . $row->ssn . "<br>";
	echo "Hourly Wage: $" . $row->hourPay . "<br>" ;
}

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
