<?php

class FileLogger
{
    public $f;

    public $name;

    public $lines = [];

    public function __construct($name, $fname)
    {
        $this->name = $name;
        $this->f = fopen($fname, 'a+');
    }

    /**
     * Closing log file in the end of the work with object.
     */
    public function __destruct()
    {
        fwrite($this->f, implode('', $this->lines));
        fclose($this->f);
    }

    /**
     * Adding to the journal one line. It does not go to the log file right now, it save in the buffer until log file was not close.
     *
     * @param $str
     */
    public function log($str)
    {
        $prefix = '['.date('Y-m-d_h:i:s')." {$this->name}] ";
        $str = preg_replace('/^/m', $prefix, rtrim($str));

        $this->lines[]=$str."\n";
    }
}