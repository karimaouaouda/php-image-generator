<?php

//rgb($red , $green , $blue)

class Color{
    protected $red = 0;
    protected $green = 0;
    protected $blue = 0;

    public function __construct()
    {
        return $this;
    }

    public function random(){
        $this->red = rand(0 , 255);
        $this->blue = rand(0 , 255);
        $this->green = rand(0 , 255);
        return array( "red" =>$this->red , "green"=>$this->green , "blue" =>$this->blue );
    }
}