<DOCTYPE html>
<html>
<body>

<h3>Employee-Department Relationship created successfully:</h3>

<?php

$ssn = $_POST["ssn"];
$deptnum = $_POST["deptnum"];

echo "Employee with ssn " . $ssn . " now works in Department with number " . $deptnum . ".";

$this->load->database();

$myquery = "INSERT INTO worksIn (ssn, deptNum) VALUES (?, ?);";

$result = $this->db->query($myquery, array($ssn, $deptnum));

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
