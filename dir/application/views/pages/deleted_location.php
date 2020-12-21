<!DOCTYPE html>
<html>
<body>

<?php

$locname = $_POST["locname"];

echo "<h3>Deleted the Location: " . $locname . "</h3>";

$this->load->database();

$query = $this->db->query("DELETE FROM Location WHERE locName = '$locname';");

?>

<br><br>
<a href="dbhome">Return to the Main Menu</a><br><br>

</body>
</html>
