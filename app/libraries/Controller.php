<?php

/*
* Base Controller Class
* Loads the model and views
*/

class Controller {

    // Load model
    public function model($model)
    {
        // Check for model file
        if (file_exists('../app/models/' . $model . '.php')) {

            // Require model file
            require_once '../app/models/' . $model . '.php';

            // Instantiate model
            return new $model();

        } else {
            die('Model does not exist');
        }

    }

    // Load view
    public function view($view, $data = [])
    {
        // Check for view file
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            die('View does not exist');
        }

    }
}
