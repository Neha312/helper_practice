<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperTestController extends Controller
{
    public function checkHelper()
    {
        $val = getMessage();
        return $val;
    }
}
