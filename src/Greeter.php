<?php

namespace App;

class Greeter
{
	public function greet(string $name = null): string
	{
		if ($name) {
			return "Hello, $name!";
		}




		if ($name == 'asss') exit;

		if ($name == 'aaaaa') {
			if (strlen($name) == 5) return 'hi';
		}
		return "Hello!" ;  
	}
}
