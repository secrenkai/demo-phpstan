<?php
class Example
{
    public function getReason(): string
    {
        $this->test();
        return <<<STR
The reason for this class to exist is to act as documentation
for passing multiple directories to PHPStan.
Have a great day!
STR;
        
    }
    private function test()
    {
        echo "s";
    }
}
