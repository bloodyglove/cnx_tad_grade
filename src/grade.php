<?php

class Grade{
	public function tad_All($score){
		if($score>='80'){
			$value = "A";
		}elseif(($score<'80')&&($score>='70')){
			$value = "B";
		}elseif(($score<'70')&&($score>='60')){
			$value = "C";
		}elseif(($score<'60')&&($score>='50')){
			$value = "D";
		}else{
			$value = "F";
		}
		return $value;
	}
}

?>