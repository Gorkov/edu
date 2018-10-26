<?php

class MathComplex
{
    public $re, $im;

    function __construct($re = 0, $im = 0)
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