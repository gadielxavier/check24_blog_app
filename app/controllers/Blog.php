<?php

namespace App\Controllers;

use App\Libraries\Controller;

class Blog extends Controller {
    
    public function __construct()
    {
        
    }

    public function index()
    {
        if(isLoggedIn()){
            redirect('posts');
        }
        
        $this->view('blog/index');
    }
}