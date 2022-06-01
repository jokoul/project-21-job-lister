<?php

class Template
{
    //Path to template
    protected $template;
    //Vars Passed In
    protected $vars = array();

    //Constructor
    public function __construct($template)
    {
        $this->template = $template;
    }

    //getters function to get the variable values
    public function __get($key){
        return $this->vars[$key];
    }

    //setters function to set the variable values
    public function __set($key, $value){
        $this->vars[$key] = $value;
    }

}