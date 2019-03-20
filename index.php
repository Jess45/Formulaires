<?php
/**
 * Created by PhpStorm.
 * User: wilder2
 * Date: 18/03/19
 * Time: 10:44
 */




function writeSecretSentence (string $arg1, string $arg2)
{

    return $arg1 . " s'incline face à " . $arg2 . "\n";

}

$arg1 = 'Le loup';
$arg2 = 'La lune';

echo writeSecretSentence ($arg1, $arg2);

?>