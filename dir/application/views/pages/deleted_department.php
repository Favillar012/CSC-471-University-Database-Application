<!DOCTYPE html>
<html>
<body>

<?php

$deptnum = $_POST["deptnum"];

echo "<h3>Deleted the Department with number " . $deptnum . "</h3>";

$this->load->database();

$query = $this->db->query("DELETE FROM Department WHERE deptNum = '$deptnum';");

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
