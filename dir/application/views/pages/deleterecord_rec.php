<!DOCTYPE html>
<html>
<body>

<?php

$recordtype = $_POST["recordtype"];

$this->load->database();

switch ($recordtype) {

	case "employee":

	echo "<form method='post' action='deleted_employee'>";
		echo "<h3>Deleting an Employee</h3>Select the employee's SSN:<br><br>";
		
	$query = $this->db->query("SELECT ssn FROM Employee;");

	echo "<select name='ssn'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->ssn . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";
		
	break;


	case "department":
		
	echo "<form method='post' action='deleted_department'>";
	echo "<h3>Deleting a Department</h3>Select the department's number:<br><br>";
		
	$query = $this->db->query("SELECT deptNum FROM Department;");

	echo "<select name='deptnum'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->deptNum . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";

	break;


	case "project":
		
	echo "<form method='post' action='deleted_project'>";
	echo "<h3>Deleting a Project</h3>Select the project's number:<br><br>";
		
	$query = $this->db->query("SELECT projNum FROM Project;");

	echo "<select name='projnum'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->projNum . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";

	break;


	case "dependent":

	echo "<form method='post' action='deleted_dependent'>";
	echo "<h3>Deleting an Employee's Dependents</h3><br>";
		
	$query = $this->db->query("SELECT ssn FROM Dependent;");
	
	echo "Select the Employee's SSN:<br><br>";

	echo "<select name='ssn'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->ssn . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";
	
	break;


	case "salariedemp":
		
	echo "<form method='post' action='deleted_salariedemp'>";
	echo "<h3>Deleting a Salaried Employee</h3>Select the employee's SSN:<br><br>";
		
	$query = $this->db->query("SELECT ssn FROM salariedEmp;");

	echo "<select name='ssn'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->ssn . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";

	break;


	case "hourlyemp":

	echo "<form method='post' action='deleted_hourlyemp'>";
	echo "<h3>Deleting an Hourly-Paid Employee</h3>Select the employee's SSN:<br><br>";
		
	$query = $this->db->query("SELECT ssn FROM hourEmp;");

	echo "<select name='ssn'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->ssn . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";

	break;


	case "manager":

	echo "<form method='post' action='deleted_manager'>";
	echo "<h3>Deleting a Manager</h3>Select the employee's SSN:<br><br>";
		
	$query = $this->db->query("SELECT ssn FROM Manager;");

	echo "<select name='ssn'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->ssn . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";

	break;


	case "manages":

	echo "<form method='post' action='deleted_manages'>";
	echo "<h3>Deleting Manager-Department Relationships</h3>Select the Department's number:<br><br>";
		
	$query = $this->db->query("SELECT deptNum FROM manages;");

	echo "<select name='deptnum'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->deptNum . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";

	break;


	case "workson":

	echo "<form method='post' action='deleted_workson'>";
	echo "<h3>Deleting Employee-Project Relationships</h3>Select the Employee's SSN:<br><br>";
		
	$query = $this->db->query("SELECT ssn FROM worksOn;");

	echo "<select name='ssn'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->ssn . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";

	break;


	case "worksin":

	echo "<form method='post' action='deleted_worksin'>";
	echo "<h3>Deleting Employee-Department Relationships</h3>Select the Employee's SSN:<br><br>";
		
	$query = $this->db->query("SELECT ssn FROM worksIn;");

	echo "<select name='ssn'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->ssn . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";

	break;


	case "participates":

	echo "<form method='post' action='deleted_parti'>";
	echo "<h3>Deleting Department-Project Relationships</h3>Select the Department's number:<br><br>";
		
	$query = $this->db->query("SELECT deptNum FROM participates;");

	echo "<select name='deptnum'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->deptNum . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";


	break;


	case "location":

	echo "<form method='post' action='deleted_location'>";
	echo "<h3>Deleting a Location</h3>Select the Location's Name:<br><br>";
		
	$query = $this->db->query("SELECT locName FROM Location;");

	echo "<select name='locname'>";
	foreach ($query->result() as $row) {
		echo "<option>" . $row->locName . "</option>";
	}
	echo "</select><br><br>";

	echo "<div><input type='submit' value='Submit' /><div><br><br>";
	echo "</form>";

	break;


	default:
		echo "Error 404!";
}

?>

</body>
</html>
