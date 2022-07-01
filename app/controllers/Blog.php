<?php

class Blog extends Controller {

    public function index ()
    {
        $data = [];
        $this->view('blog/index', $data);
    }

}