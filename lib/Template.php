<?php
//This template can be use inside different project and we gonna extends it several times
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

    public function __toString()
    {
        //we want to extract variables to use a single instead of using a key value inside the template
        //For example : rather than using "$template->name", we use "$name".
        extract($this->vars);
        //We define path name
        chdir(dirname($this->template));
        //To output the template by starting a buffer
        ob_start();
        //include template path
        include basename($this->template);
        //After buffer, we need to run and return Ob get clean
        return ob_get_clean(); 
    }

}