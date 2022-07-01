<?php

/*
* Class that loads current controller and redirect
* to the proper view. 
*/
class Kernel {

    protected $current_controller = 'Blog';
    protected $current_method = 'index';
    protected $url_params = [];
    protected $url = '';

    public function __construct()
    {
        // Get current url
        if(isset($_GET['url'])){

            // Strip whitespace (or other characters) from the end of a string
            $this->url = rtrim($_GET['url'], '/');

            // Split a string by a '/'
            $this->url = explode('/', $this->url);

        }

        // Set Current Controller
        if(isset($this->url[0])){
            if(file_exists('../app/controllers/' . ucwords($this->url[0]) . '.php' )){
                $this->current_controller = ucwords($this->url[0]);
                // Unset 0 Index
                unset($this->url[0]);
            }
        }

        // Loads the current controller
        require_once '../app/controllers/' . $this->current_controller . '.php';

        // Instantiate the current controller class 
        $this->current_controller = new $this->current_controller;

        // Check for second part of url
        if(isset($this->url[1])){
            // Check to see if method exists in controller
            if(method_exists($this->current_controller, $this->url[1])){
                $this->current_method = $this->url[1];
                // Unset 1 Index
                unset($this->url[1]);
            }
        }

        // Get the ulr params
        $this->url_params = $this->url ? array_values($this->url) : [];

        // Call a callback with an array of parameters
        call_user_func_array([$this->current_controller, $this->current_method], $this->url_params);
    }

}