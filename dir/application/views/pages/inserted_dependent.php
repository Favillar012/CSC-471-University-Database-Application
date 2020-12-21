<DOCTYPE html>
<html>
<body>

<h3>New employee dependent inserted successfully:</h3>

<?php

$ssn = $_POST["ssn"];
$depname = $_POST["depname"];
$rel = $_POST["rel"];

echo $depname . " (" . $rel . "), for " . $ssn;

$this->load->database();

$myquery = "INSERT INTO Dependent (ssn, name, relationship) VALUES (?, ?, ?);";

$result = $this->db->query($myquery, array($ssn, $depname, $rel));

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
