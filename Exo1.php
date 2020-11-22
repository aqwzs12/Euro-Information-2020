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

function check_rules($s)
{
    $l = substr($s, strlen($s) - 3);
    return '555' == $l;
}

$file = file_get_contents('./Exo1.txt'); //
$input = explode("\r\n", $file); /////////

for ($i = 1; $i < count($input); $i++) {
    if(!check_rules($input[$i])) {
        echo $input[$i] . PHP_EOL;
        break;
    }
}


/* Vous pouvez aussi effectuer votre traitement ici après avoir lu toutes les données */
