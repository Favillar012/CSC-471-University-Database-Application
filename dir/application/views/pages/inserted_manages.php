<DOCTYPE html>
<html>
<body>

<h3>Manager-Department Relationship created successfully:</h3>

<?php

$ssn = $_POST["ssn"];
$deptnum = $_POST["deptnum"];

echo "Manager with ssn " . $ssn . " now manages Department with number " . $deptnum . ".";

$this->load->database();

$myquery = "INSERT INTO manages (ssn, deptnum) VALUES (?, ?);";

$result = $this->db->query($myquery, array($ssn, $deptnum));

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
