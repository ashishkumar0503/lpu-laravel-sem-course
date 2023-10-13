<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    function index() {
        echo "Hello";
    }
    function show($id = null)
    {
        if ($id === null) {
            echo "Hello";
        } else {
            echo "Hello " . $id;
        }
    }
}
