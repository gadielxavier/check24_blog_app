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
        
        $data = [
            'title' => 'SharePosts',
            'description' => 'Simple Social Network buit in TranversyMVC framework.'
        ];
        $this->view('blog/index', $data);
    }
}