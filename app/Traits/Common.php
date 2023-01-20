<?php

namespace App\Traits;

trait Common
{

    public function fun1()
    {

        return "Fun1()=Trait response";
    }

    public function status($status = 0)
    {

        //$statusText = "InActive";
        if ($status == 1) {
            $statusText = "Active";
        } else {
            $statusText = "InActive";
        }

        return 'status()=' . $statusText;
    }
}
