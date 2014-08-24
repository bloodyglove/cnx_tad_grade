<html>
<head>
<?php
	include "grade.php";
	$score = $_GET['score'];
	if(isset($score)){
		$grade = new Grade();
		$textGrade = $grade->tad_All($score);
	}
?>
</head>
<body>
<center>
<fieldset>
<legend>TAD GRADE</legend>
<form id="inputGrade" name="inputGrade" method="get" action="#">
	<input type="text" name="score" id="score" value="<?php echo $score;?>">
	<input type="submit" id="submit" name="submit" value="submit">
<?php
	echo '<hr>'.$textGrade.'<hr>';
?>
</form>
</fieldset>
</center>
</body>
