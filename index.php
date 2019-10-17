<?php
require "vendor/autoload.php";

$consoleColor = new JakubOnderka\PhpConsoleColor\ConsoleColor();


use Nfq\Akademija\NotTyped;
use Nfq\Akademija\Soft;
use Nfq\Akademija\Strict;

 

    function calculateHomeWorkSum(...$numbers) 
    {
            $sum = 0;
            foreach ($numbers as $n) {
                $sum += $n;
            }
            return $sum;
    }
    
    
try{
    echo $consoleColor->apply("color_2", "calculateHomeWorkSum : ".calculateHomeWorkSum(3,2.2,'1')); 
}
catch (Throwable $e) {
    echo $consoleColor->apply("color_9", "Caught as throwable from local: ");
}
echo "\n";
try{
    echo $consoleColor->apply("color_3", "\Nfq\Akademija\NotTyped\calculateHomeWorkSum : ".NotTyped::calculateHomeWorkSum(3,2.2,'1')); 
}
catch (Throwable $e) {
    echo $consoleColor->apply("color_9", "Caught as throwable from NotTyped: ");
}
echo "\n";
try{
    echo $consoleColor->apply("color_4", "\Nfq\Akademija\Soft\calculateHomeWorkSum : ".Soft::calculateHomeWorkSum(3,2.2,'1')); 
}
catch (Throwable $e) {
    echo $consoleColor->apply("color_9", "Caught as throwable from Soft ");
}
echo "\n";
try{
    echo $consoleColor->apply("color_5","\Nfq\Akademija\Strict\calculateHomeWorkSum : ".Strict::calculateHomeWorkSum(3,2.2,'1')); 
}
catch (Throwable $e) {
    echo $consoleColor->apply("color_9", "Caught as throwable from Strict ");
}
 
