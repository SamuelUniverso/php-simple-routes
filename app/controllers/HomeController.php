<?php

namespace App\Controllers;


class HomeController {

    public function index($params)
    {
        return Controller::view('home');
    }

}
