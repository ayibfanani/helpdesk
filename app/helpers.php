<?php 

if (!function_exists('site')) {

    /**
     * Shorthand to get currentSite data
     */
    function site($key = null)
    {
        $site = app('currentSite');
        return ($key) ? $site[$key] : $site;
    }
}
