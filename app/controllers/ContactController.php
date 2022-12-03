<?php

namespace App\Controllers;

class ContactController
{
    public function index()
    {
        Controller::view('contact');
    }

    public function store($params)
    {
        var_dump($params);
        var_dump("store do contact");
    }
}
