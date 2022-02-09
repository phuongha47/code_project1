<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Image;
use App\Models\Category;
class Controller extends BaseController
{
    protected $searchKeyWord = "";
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $limit;
    protected $categoriesWithChildren;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->limit = config('app.limit');
    }
}