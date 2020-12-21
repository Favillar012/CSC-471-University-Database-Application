<!DOCTYPE html>
<html>
<body>

<?php

$ssn = $_POST["ssn"];

echo "<h3>Deleted the Employee-Department Relationships of Employee with SSN " . $ssn . "</h3>";

$this->load->database();

$query = $this->db->query("DELETE FROM worksIn WHERE ssn = '$ssn';");

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
