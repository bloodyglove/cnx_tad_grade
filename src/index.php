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
<div width="50%">
<fieldset>
<legend>TAD GRADE</legend>
<form id="inputGrade" name="inputGrade" method="get" action="#">
	<input type="text" name="score" id="score" value="<?php echo $score;?>">
	<input type="submit" id="submit" name="submit" value="submit">
<?php
	echo '<hr>'.'you got grade : '.$textGrade.'<hr>';
?>
</form>
</fieldset>
</div>
</center>
</body>
