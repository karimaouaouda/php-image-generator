<?php
require_once(__DIR__.'/Color.php');


class IMGGenerator{
    protected $color = NULL;
    public $image = NULL;
    public $width = 300;
    public $height = 300;

    public function __construct(){
        $this->image = imagecreatetruecolor($this->width , $this->height);
        $this->setup();
    }


    private function setup()
    {
        $color = new Color();
        $color = $color->random();
        $mycolor = imagecolorallocate($this->image , $color["red"] , $color["green"] , $color["blue"]);
        imagefill($this->image , 0 , 0 , $mycolor);
    }
}