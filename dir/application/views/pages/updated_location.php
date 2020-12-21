<!DOCTYPE html>
<html>
<body>

<?php

$oldlocname = $_POST["oldlocname"];
$locname = $_POST["locname"];
$deptnum = $_POST["deptnum"];
$address = $_POST["address"];

$this->load->database();

echo "<h3>Updated location " . $oldlocname . ".</h3>";

$myquery = $this->db->query("UPDATE Location SET locName='$locname', address='$address', deptNum='$deptnum' WHERE locName='$oldlocname';");

echo "Location Name: " . $locname . "<br>";
echo "Address: " . $address . "<br>" ;
echo "Department Number: " . $deptnum . "<br>" ;

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
