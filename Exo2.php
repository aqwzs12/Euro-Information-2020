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


$file = file_get_contents('./Exo2.txt'); //
$input = explode("\r\n", $file); /////////
$reuslt = [];

for ($i = 1; $i < count($input); $i++) {
 if(isset($result[$input[$i]])) {
    $result[$input[$i]] += 1;
 }else{
    $result[$input[$i]] = 1;
 }
}

$index = -1 ;
$max = -1;

foreach($result as $k => $v){

    if($max < $v) {
        $max = $v;
        $index = $k;
    }

}

echo $index . PHP_EOL;


/* Vous pouvez aussi effectuer votre traitement ici après avoir lu toutes les données */
