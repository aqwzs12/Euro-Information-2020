<?php


/*******
 * Read input from STDIN
 * Use echo or print to output your result to STDOUT, use the PHP_EOL constant at the end of each result line.
 * Use:
 *     fwrite(STDERR, "hello, world!" . PHP_EOL);
 * or
 *		error_log("hello, world!" . PHP_EOL);
 * to output debugging information to STDERR
 * ***/
function populate_set($input, $set)
{
    foreach ($input as $value) {
        $ex = explode(" ", $value);
        $u = $ex[0];
        $v = $ex[1];
        $set[$v] = $u;
    }
    return $set;
}

function construct_set($n)
{
    $set = [];
    for ($i = 1; $i <= $n; $i++) {
        $set[$i] = $i;
    }
    return $set;
}

function process_set($n, $set)
{
    for ($i = 1; $i <= $n; $i++) {
        $set[$i] = find($i, $set);
    }
    return $set;
}

function find($a, &$set)
{
    if ($set[$a] == $a) {
        return $a;
    }
    return find($set[$a], $set);
}

$file = file_get_contents('./Exo3.txt'); //
$input = explode("\r\n", $file); /////////
$exp = explode(" ", $input[0]);
unset($input[0]);
$n = $exp[0];
$m = $exp[1];
$set = construct_set($n);
$set = populate_set($input, $set);
$set = process_set($n, $set);

$r = [];
foreach ($set as $k => $v) {
    if (isset($r[$v])) {
        $r[$v] += 1;
    } else {
        $r[$v] = 1;
    }
}
$max = -1;
$index = -1;
ksort($r);
foreach ($r as $k => $v) {
    if ($v > $max) {
        $max = $v;
        $index = $k;
    }
}

echo $index . PHP_EOL;
