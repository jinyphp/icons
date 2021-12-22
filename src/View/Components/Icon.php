<?php
namespace Jiny\Icons\View\Components;

use Illuminate\View\Component;

class Icon extends Component
{

    protected $type;
    protected $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type="heroicon", $name=null)
    {
        $this->type = $type;
        $this->name = $name;
    }

    public function render()
    {
        ## svg 파일 경로
        $path = __DIR__.'/../../../resources/views';

        ## svg 파일 읽기
        $filename = $path.DIRECTORY_SEPARATOR.$this->type.DIRECTORY_SEPARATOR.$this->name.".svg";
        if(file_exists($filename)) {
            $svg = file_get_contents($filename);
        } else {
            $svg = "";
        }

        //dd($svg);

        ##
        return view("jinyicon::components.icon",['svg'=>$svg,'name'=>$this->name]);
    }
}

