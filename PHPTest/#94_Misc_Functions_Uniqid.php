<?php

/*
 * Unique Identifier: uniqid(Prefix <- Optional To Type Special Char Before uniqid, More_Entropy <- Optional By Default False If True Get Random 23 Char);
 */

$random = uniqid("", TRUE);

echo $random . "<br>";

var_dump($random);