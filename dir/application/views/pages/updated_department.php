<!DOCTYPE html>
<html>
<body>

<?php

$deptnum = $_POST["deptnum"];
$deptname = $_POST["deptname"];

$this->load->database();

echo "<h3>Updated department with number " . $deptnum . ".</h3>";

$myquery = $this->db->query("UPDATE Department SET deptNum='$deptnum', deptName='$deptname' WHERE deptNum='$deptnum';");

echo "Department Number: " . $deptnum . "<br>";
echo "Department Name: " . $deptname . "<br>" ;

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
