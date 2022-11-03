<?php

namespace App\Helpers;

class Common {

    public static function splitfullName(String $fullName)
    {

        return ($fullName) ? strtok($fullName) : null;
    }


}
