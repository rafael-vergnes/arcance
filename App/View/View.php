<?php

namespace View;

class View {
    private ViewHeader $header;
    private ViewFooter $footer;
    private string $buffer = "";

    public function __construct(string $title, string $linkCss, string $linkJs){
        $this->header = new ViewHeader($title,$linkCss,$linkJs);
        $this->footer = new ViewFooter();
    }
    
//GETTER SETTER
    public function getBuffer():?string{
        return $this->buffer;
    }

    public function setBuffer(string $newBuffer):self{
        $this->buffer = $newBuffer;
        return $this;
    }
//METHODS
    public function display(): void {
        echo $this->buffer;
    }
    public function displayAll(): void {
        $this->header->launchBuffer()->display();
        $this->launchBuffer()->display();
        $this->footer->launchBuffer()->display();
    }
}