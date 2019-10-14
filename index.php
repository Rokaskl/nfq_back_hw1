<?php
try {

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
 //   Not working :(    //

    function calculateHomeWorkSum(...$numbers) 
    {
            $sum = 0;
            foreach ($numbers as $n) {
                $sum += $n;
            }
            return $sum;
    }
include_once("./1.php");
include_once("./2.php");
include_once("./3.php");

echo "calculateHomeWorkSum : ".calculateHomeWorkSum(3,2.2,'1'); 
echo "\n";
echo "\Nfq\Akademija\NotTyped\calculateHomeWorkSum : ".\Nfq\Akademija\NotTyped\calculateHomeWorkSum(3,2.2,'1'); 
echo "\n";
echo "\Nfq\Akademija\Soft\calculateHomeWorkSum : ".\Nfq\Akademija\Soft\calculateHomeWorkSum(3,2.2,'1'); 
echo "\n";
echo "\Nfq\Akademija\Strict\calculateHomeWorkSum : ". \Nfq\Akademija\Strict\calculateHomeWorkSum(3,2.2,'1'); 
 }
 catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
}




?>