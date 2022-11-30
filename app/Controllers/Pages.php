<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function timeline()
    {
        return view('pages/timeline.php');
    }
}
