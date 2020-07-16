<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoragePath extends Model
{
    //
    public static function path(){
        $counter = 0;
        $whitelist = [
            // IPv4 address
            '127.0.0.1',

            // IPv6 address
            '::1'
        ];
        $path = "";
        if (in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
            $path = "";
        }
        else {
            $path="/../public";
        }
        return $path;
    }
}
