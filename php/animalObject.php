<?php 

class Animal
{
	public $name;
	public $sound;
	
	function Animal($name = "Freddy")
	{
		$this->name = $name;
		$this->sound= "I don't know what sound I make";
	}
	
	function breathe()
	{
		echo "ahhhhhhhhhh";
	}
	
	
	function makeSound()
	{
		echo "<p>" . $this ->sound . "</p>";
	}
}


class Pig extends Animal
{
	function Pig()
	{
		$this ->name = "Jerome";
		$this ->sound= "A pig goes oink";
	}
	
}

$oAnimal = new Animal("George");

$oAnimal->breathe();
$oAnimal->makeSound();

print_r($oAnimal);

?>