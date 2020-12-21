<DOCTYPE html>
<html>
<body>

<h3>Manager inserted successfully:</h3>

<?php

$ssn = $_POST["ssn"];
echo "Employee with ssn " . $ssn . " is now a manager.";

$this->load->database();

$myquery = "INSERT INTO Manager (ssn) VALUES (?);";

$result = $this->db->query($myquery, array($ssn));

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
