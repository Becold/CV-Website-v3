<?php

abstract class Utils
{

    static function contains($string, $needle) {
        return strpos($string, $needle) !== false;
    }

    static function startWith($string, $needle) {
        return $needle === '' || substr($string, 0, strlen($needle)) === $needle;
    }

}