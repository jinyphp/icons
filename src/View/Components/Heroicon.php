<?php
namespace Jiny\Icons\View\Components;

use Illuminate\View\Component;
use \Jiny\Icons\View\Components\Icon;

class Heroicon extends Icon
{
    public function __construct($name=null)
    {
        $this->type = "heroicon";
        $this->name = $name;

    }
}

