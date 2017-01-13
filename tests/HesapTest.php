<?php

require("hesap.php");

class HesapTest extends PHPUnit_TestCase{
	private $hesap;

	protected function setUp(){
		$this->hesap = new Hesap();
	}

	protected function tearDown(){
		$this->hesap = NULL;
	}

	public function testTopla(){
		$result = $this->hesap->topla(1,2);
		$this->assetEquals(3,$result);
	}
}

?>