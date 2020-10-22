<?php 

class Hello {

    public $talk;

    public function getTalk() : string {
        return $this->talk;
    }

    public function setTalk(string $talk) {
        $this->talk = $talk;
    }

    public function __construct(string $talk)
    {
        $this->setTalk($talk);
    }
}

$hello = new Hello ('Hello World !');
var_dump($hello);
