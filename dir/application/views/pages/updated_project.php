<!DOCTYPE html>
<html>
<body>

<?php

$projnum = $_POST["projnum"];
$projname = $_POST["projname"];
$projdesc = $_POST["projdesc"];

$this->load->database();

echo "<h3>Updated project with number " . $projnum . ".</h3>";

$myquery = $this->db->query("UPDATE Project SET projNum=$projnum, projName='$projname', projDesc='$projdesc' WHERE projNum='$projnum';");

echo "Project Number: " . $projnum . "<br>";
echo "Project Name: " . $projname . "<br>" ;
echo "Project Description: " . $projdesc . "<br>" ;

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
