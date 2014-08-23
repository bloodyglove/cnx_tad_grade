<?php

class GradeUnitTest extends PHPUnit_Framework_TestCase{
	public $Grade;
	/*public $listGrade = array('B'=>'80','B'=>'70','C'=>'60','D'=>'50','F'=>'49');*/
	public function setUp(){
		$this->Grade = new Grade();
	}

	function test_score_80_should_get_greade_A(){
		$this->assertEquals("A",$this->Grade->tad_All(80));
	}
	function test_score_70_should_get_greade_A(){
		$this->assertEquals("B",$this->Grade->tad_All(70));
	}
	function test_score_60_should_get_greade_A(){
		$this->assertEquals("C",$this->Grade->tad_All(60));
	}
	function test_score_50_should_get_greade_A(){
		$this->assertEquals("D",$this->Grade->tad_All(50));
	}
	function test_score_49_should_get_greade_A(){
		$this->assertEquals("F",$this->Grade->tad_All(49));
	}

	/*function test_all_grade(){
		foreach($this->listGrade as $key => $value){
			$this->assertEquals($key,$this->Grade->tad_All($value));
		}
	}*/

}

?>