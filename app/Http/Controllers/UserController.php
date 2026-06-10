<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('users');
    }

    public function show($id) {
        return "User ID:" . $id;                
    }

    public function getNameEmail($name, $email) {
        return "Your username is:" . $name . " and email is:" . $email;
    }
}
