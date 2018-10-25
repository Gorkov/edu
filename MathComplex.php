<?php
/**
 * Created by PhpStorm.
 * User: gorkov
 * Date: 25.10.2018
 * Time: 22:15
 */

class MathComplex
{
    public $re, $im;

    function __construct($re, $im)
    {
        $this->re = $re;
        $this->im = $im;
    }

    function add(MathComplex $mathComplex)
    {
        $this->re += $mathComplex->re;
        $this->im += $mathComplex->im;
    }

    function __toString()
    {
        return "({$this->re}, {$this->im}) \n";
    }

}