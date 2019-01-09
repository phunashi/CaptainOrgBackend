<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;  
use App\DataAccessLayer\Repositories\Category\CategoryRepositoryInterface;
use App\DataAccessLayer\Helpers\utilities;
use App\DataAccessLayer\Helpers\drop_down;
class CategoryController extends Controller
{
    //
 //

// space that we can use the repository from
protected $category;

public function __construct(CategoryRepositoryInterface $category)
{
	$this->category = $category;
}
 

public function index()
{
    $records= $this->category->all();
    
    return View('categories.index')->with('categories',$records);
}
public function create()
{
    $parentCategories =(new drop_down())->getParentCategory();
    return View('categories.create')->with('parentCategories',$parentCategories);
}
public function edit($id)
{
    $record= $this->category->edit($id);
    return View('categories.edit')->with('record',$record);
}
public function update(Request $request,$id){

    $this->category->update(['name'=>$request->name,'status'=>$request->status,'position'=>$request->position],$id);
    return redirect()->action('BannerController@index');
        
}
public function destroy($id)
{
   
    $this->category->delete($id);
    return redirect()->action('BannerController@index');

}
public function show($id)
{
    return View('banners.show');
            
}
public function store(Request $request)
{
    $record= $this->category->create($request->all());
    if($request->hasFile('image')) utilities::uploadFile('image','img/categories/',$record->category_id,'jpeg');
    return redirect()->action('CategoryController@index');
}

}
