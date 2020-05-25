<?php
declare(strict_types=1);


$data = range(1, 10);

/**
 * Math power for int
 *
 * @param int $value Value
 *
 * @return int Result
 */
function power(int $value) : int
{
    return (int)($value * $value);
}

var_dump($data);

$data = array_map('power', $data);

var_dump($data);

