<?php

namespace Nfq\Akademija;
class NotTyped {
static function calculateHomeWorkSum(...$numbers) : int
{
        $sum = 0;
        foreach ($numbers as $n) {
            $sum += $n;
        }
        return $sum;

}
}
