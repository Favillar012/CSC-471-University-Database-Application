<!DOCTYPE html>
<html>
<body>

<h2>Insert New Project</h2>
<form method="post" action="inserted_proj">

	Project Name:
	<input type="text" name="projname" value="" maxlength="20" required /><br><br>

	Project Number:
	<input type="number" name="projnum" value="" min="10000" max="99999" required /><br><br>

	Project Description:<br>
	<textarea name="projdesc" rows="6" cols="40">(Describe the project)
  </textarea>
	
	<div><input type="submit" value="Submit" /><div>
	<br><br>

</form>

</body>
</html>