<?php
declare(strict_types = 1);

namespace Nfq\Akademija;

class Strict{
static function calculateHomeWorkSum(int ...$numbers) : int
{
        $sum = 0;
        foreach ($numbers as $n) {
            $sum += $n;
        }
        return $sum;
}
}