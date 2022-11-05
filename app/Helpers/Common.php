<?php

namespace App\Helpers;

class Common {

    public static function splitfullName(string $fullName)
    {

        return strtok($fullName, " ") ? strtok($fullName, " ") : $fullName;
    }


}
