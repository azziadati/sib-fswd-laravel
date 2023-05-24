<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index()
    {
        return view('user.index');
    }

    public function Create()
    {
        return view('create');
    }

    public function Edit()
    {
        return view('edit');
    }

    public function Detail()
    {
        return view('detail');
    }
}
