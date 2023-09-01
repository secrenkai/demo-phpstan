<?php

namespace App;

class Greeter
{
	public function greet(string $name = ''): string
	{
		if ($name) {
			return "Hello, $name!";
		}




		if ($name == 'asss') exit;

		if ($name == 'aaaaa') {
			
			sleep(1);

			if (strlen($name) == 5) 
			return 'hi';
			
			
			
	sleep(2);
		}
		return "Hello!" ;  
	}
}
