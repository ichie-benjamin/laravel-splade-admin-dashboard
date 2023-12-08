<?php


use App\Utilities\Icons;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\Splade\FileUploads\ExistingFile;

function convertToWord($input): string
{
    return ucwords(str_replace(['_', '-'], ' ', $input));
}

if (!function_exists('getIcon')) {
    function getIcon($iconName): string
    {
        $icons = Icons::getIcons();
        return $icons[$iconName] ?? '';
    }
}
if (!function_exists('get_file_name')) {
    function get_file_name($url): string
    {
        return str_replace(asset('/storage'),'', $url);
    }
}
if (!function_exists('get_existing_file')) {
    function get_existing_file($url): ExistingFile|array|null
    {
        return Storage::disk('public')->exists(get_file_name($url)) ? ExistingFile::
        fromDisk('public')->get(get_file_name($url)) : null;
    }
}

if (!function_exists('is_active')) {
    function is_active($route, $array =  false): string
    {
        if($array){
            foreach ($route as $i){
                if (request()->routeIs($i['active'])){
                    return true;
                }
            }
            return false;
        }else{
            return request()->routeIs($route);
        }
    }
}

if (!function_exists('get_permission')) {
    function get_permission($route): string
    {
        return str_replace('admin-','',str_replace('.','-', $route));
    }
}
