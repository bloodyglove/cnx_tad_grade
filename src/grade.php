<?php

class Grade{
	/*public function tad_A($score){
		return "A";
	}
	public function tad_B($score){
		return "B";
	}
	public function tad_C($score){
		return "C";
	}
	public function tad_D($score){
		return "D";
	}
	public function tad_F($score){
		return "F";
	}*/

	public function tad_All($score){
		if($score>='80'){
			return "A";
		}elseif(($score<'80')&&($score>='70')){
			return "B";
		}elseif(($score<'70')&&($score>='60')){
			return "C";
		}elseif(($score<'60')&&($score>='50')){
			return "D";
		}else{
			return "F";
		}
		
	}
}

?>