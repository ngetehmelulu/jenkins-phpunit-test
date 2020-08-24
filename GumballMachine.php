<?php

class GumballMachine {
	private $gumballs;


	// Get the amount of gumballs still in the machine
	public function getGumballs(){
		return $this->gumballs;
	}

	// Set the amount of gumballs in the machine
	public function setGumballs($amount){
		$this->gumballs = $amount;
	}

	// The userr turns the whell, machine dispenses gumball!
	public function turnWhell(){
		$this->setGumballs($this->getGumballs() - 1);
	}

}


