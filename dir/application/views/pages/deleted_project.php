<!DOCTYPE html>
<html>
<body>

<?php

$projnum = $_POST["projnum"];

echo "<h3>Deleted the Project with number " . $projnum . "</h3>";

$this->load->database();

$query = $this->db->query("DELETE FROM Project WHERE projNum = '$projnum';");

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
