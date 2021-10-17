<?php
if (! function_exists('config')) {

    function config($value = null)
    {
        return new Collection($value);
    }
}