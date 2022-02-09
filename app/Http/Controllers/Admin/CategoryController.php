<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\AddSubCategoryRequest;
use App\Http\Requests\EditCategoryRequest;

class CategoryController extends Controller
{
    private $controller_name = 'admin';
    protected $pathToView = 'admin.pages.';
    private $path_to_ui = 'ui_resources/startbootstrap-sb-admin-2/';

    public function __construct()
    {
        // Var want to share
        view()->share('controller_name', $this->controller_name);
        view()->share('path_to_ui', $this->path_to_ui);
        $this->limit = config('app.limit');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $categories = Category::first();
        $categories = $categories->load('posts')->paginate($this->limit);

        return view($this->pathToView . 'listCategory', array_merge(compact('categories'), ['searchKeyWord' => $this->searchKeyWord]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSubCategory()
    {
        $categories_sub = DB::table('categories')->select('*')->whereNull('parent_id')->get();

        return view($this->pathToView . 'addSubCategory', compact(['categories_sub']));
    }

    public function storeSubCategory(AddSubCategoryRequest $request)
    {
        $Category = Category::create($request->all());

        return redirect()->route('category.index');
    }

    public function create()
    {

        return view($this->pathToView . 'addCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddCategoryRequest $request)
    {
        $Category = Category::create($request->all());

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view($this->pathToView . 'editCategory', compact(['category']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditCategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
       
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index');
    }

    public function search(Request $request)
    {
        $searchKeyWord = $request->input('search');
        $categories = Category::where('name', 'LIKE', "%{$searchKeyWord}%")
            ->orderBy('id', 'DESC')
            ->paginate($this->limit);

        return view($this->pathToView . 'listCategory', compact('categories', 'searchKeyWord'));
    }
}