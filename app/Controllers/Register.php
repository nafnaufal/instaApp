<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Register extends BaseController
{
    public function register()
    {
        return view('pages/register.php');
    }
}
