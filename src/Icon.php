<?php

namespace Jiny\Icons;

class Icon
{
    private $path;
    private $type;
    private $name;

    private $attributes = [];

    public function __construct($name, $type="heroicon")
    {
        $this->path = __DIR__.'/../resources/views';
        $this->type = $type;
        $this->name = $name;
    }

    public function setType($value)
    {
        $this->type = $value;
        return $this;
    }

    public function setAttribute($key,$value)
    {
        $this->attributes[$key] = $value;
        return $this;
    }

    public function setClass($value)
    {
        $this->setAttribute('class', $value);
        return $this;
    }

    public function __toString()
    {
        $name = str_replace(".",DIRECTORY_SEPARATOR,$this->name);
        ## svg 파일 읽기
        $filename = $this->path.DIRECTORY_SEPARATOR.$this->type.DIRECTORY_SEPARATOR.$name.".svg";
        if(file_exists($filename)) {
            $svg = file_get_contents($filename);
        } else {
            $svg = "";
        }

        if($svg) {
            $attr = "";
            if(!empty($this->attributes)) {
                foreach ($this->attributes as $key => $value) {
                    $attr .= $key."=".'"'.$value.'" ';
                }
            } else {
                $attr .= "class=".'"w-4 h-4" ';
            }

            $svg = str_replace("<svg","<svg ".$attr, $svg);
        }

        return $svg;

        //return $res;
	}
}
