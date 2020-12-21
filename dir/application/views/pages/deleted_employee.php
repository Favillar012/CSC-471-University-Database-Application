<!DOCTYPE html>
<html>
<body>

<?php

$ssn = $_POST["ssn"];

echo "<h3>Deleted the Employee with SSN " . $ssn . "</h3>";

$this->load->database();

$query = $this->db->query("DELETE FROM Employee WHERE ssn = '$ssn';");

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>