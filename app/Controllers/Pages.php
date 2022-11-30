<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function timeline()
    {
        return view('pages/timeline.php');
    }
    
    public function postingan()
    {
        return view('pages/postingan.php');
    }
    
    public function upload()
    {
        return view('pages/upload.php');
    }
}
