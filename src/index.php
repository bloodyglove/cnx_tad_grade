<html>
<head>
<?php
	include "grade.php";
?>
</head>
<body>
<form id="inputGrade" name="inputGrade" method="get" action="#">
	<input type="text" name="score" id="score" value="<?php isset($_GET['score'])?echo $_GET['score']:echo '';?>">
	<input type="submit" value="submit">
<?php
	if(isset($_GET['score'])){
		$grade = new Grade();
		$textGrade = $grade->tad_All($_GET['score']);
		echo '<hr>'.$textGrade.'<hr>';
	}
	
?>
</form>

</body>
