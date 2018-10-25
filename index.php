<?php
/**
 * Created by PhpStorm.
 * User: gorkov
 * Date: 25.10.2018
 * Time: 22:21
 */

require_once 'MathComplex.php';

$maxComplex = new MathComplex(10, 20);

$maxComplex->add(new MathComplex(10, 20));

echo $maxComplex->__toString();