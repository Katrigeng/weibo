<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
        $database_url = "postgres://hvsfhfxkkfvdkj:de45c29c5a0f365fc53387cb85f16e6e83c3428673b90b85b3a33f538b2e4b0f@ec2-18-211-86-133.compute-1.amazonaws.com:5432/dab88bohfb4e38";
        $url = parse_url($database_url);
        $a = substr($url["path"], 1);
        dump($a);
    }

}
