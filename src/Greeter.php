<?php

namespace App;

class Greeter
{
	public function greet(string $name = ''): string
	{
		if ($name) {
			return "Hello, $name!";
		} else {
			return [];
		}

		return "Hello!" ;  
	}

}
