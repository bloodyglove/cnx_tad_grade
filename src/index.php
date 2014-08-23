<html>
<head>
<?php
	include "grade.php";
	if(isset($_GET['score'])){
		$grade = new Grade();
		$textGrade = $grade->tad_All($_GET['score']);
	}
?>
</head>
<body>
<center>
<fieldset>
<legend>TAD GRADE</legend>
<form id="inputGrade" name="inputGrade" method="get" action="#">
	<input type="text" name="score" id="score" value="<?php echo $_GET['score'];?>">
	<input type="submit" value="submit">
<?php
	echo '<hr>'.$textGrade.'<hr>';
?>
</form>
</fieldset>
</center>
</body>
