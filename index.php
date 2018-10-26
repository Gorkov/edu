<?php

require_once 'MathComplex.php';

$maxComplex = new MathComplex(10, 20);

$maxComplex->add(new MathComplex());

echo $maxComplex->__toString();