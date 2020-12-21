<DOCTYPE html>
<html>
<body>

<h3>New project inserted successfully:</h3>

<?php

$projname = $_POST["projname"];
$projnum = $_POST["projnum"];
$projdesc = $_POST["projdesc"];

$this->load->database();

$myquery = "INSERT INTO Project (projName, projNum, projDesc) VALUES (?, ?, ?);";

$result = $this->db->query($myquery, array($projname, $projnum, $projdesc));

echo $projname . ", with project number " . $projnum;

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>