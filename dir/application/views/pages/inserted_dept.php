<DOCTYPE html>
<html>
<body>

<h3>New department inserted successfully: </h3>

<?php

$deptnum = $_POST["deptnum"];
$deptname = $_POST["deptname"];

$this->load->database();

$myquery = "INSERT INTO Department (deptNum, deptName) VALUES (?, ?);";

$result = $this->db->query($myquery, array($deptnum, $deptname));

echo $deptname;

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
