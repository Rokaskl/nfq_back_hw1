<?php
require "vendor/autoload.php";

use Nfq\Akademija\NotTyped;
use Nfq\Akademija\Soft;
use Nfq\Akademija\Strict;
try {
 //   Not working :(    //

    function calculateHomeWorkSum(...$numbers) 
    {
            $sum = 0;
            foreach ($numbers as $n) {
                $sum += $n;
            }
            return $sum;
    }

echo "calculateHomeWorkSum : ".calculateHomeWorkSum(3,2.2,'1'); 
echo "\n";
echo "\Nfq\Akademija\NotTyped\calculateHomeWorkSum : ".NotTyped::calculateHomeWorkSum(3,2.2,'1'); 
echo "\n";
echo "\Nfq\Akademija\Soft\calculateHomeWorkSum : ".Soft::calculateHomeWorkSum(3,2.2,'1'); 
echo "\n";
echo "\Nfq\Akademija\Strict\calculateHomeWorkSum : ".Strict::calculateHomeWorkSum(3,2.2,'1'); 
 }
 catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
}
