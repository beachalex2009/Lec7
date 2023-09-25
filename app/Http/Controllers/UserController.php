<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index()
    {
        return "Index";
    }
    public function Show()
    {
        return "Show";
    }
    public function Add()
    {
        return "Add";
    }
    public function Edit()
    {
        return "Edit";
    }
    public function Update()
    {
        return "Update";
    }
}
