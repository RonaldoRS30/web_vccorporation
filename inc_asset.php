<?php
if (!function_exists('asset_v')) {
    function asset_v($path, $prefix = '') {
        $root = dirname(__FILE__);
        $full = $root . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, ltrim($path, '/'));
        $v = file_exists($full) ? filemtime($full) : time();
        return $prefix . $path . '?v=' . $v;
    }
}
