<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    protected $controller_name = 'admin';
    protected $pathToView = 'admin.pages.';
    protected $path_to_ui = 'ui_resources/startbootstrap-sb-admin-2/';
    public function switchLang($lang)
     {
         if (array_key_exists($lang, Config::get('languages'))) {
             Session::put('applocale', $lang);
         }
         return Redirect::back();
     } 
}
