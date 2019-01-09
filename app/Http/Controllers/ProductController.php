<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataAccessLayer\Repositories\Product\ProductRepositoryInterface;
use App\DataAccessLayer\Helpers\utilities;
use App\DataAccessLayer\Helpers\drop_down;

class ProductController extends Controller
{

 //

// space that we can use the repository from
protected $product;

public function __construct(ProductRepositoryInterface $product)
{
	$this->product = $product;
}
 

public function index()
{
    $records= $this->product->all();
    
    return View('products.index')->with('products',$records);
}
public function create()
{
   // $parentCategories =(new drop_down())->getParentCategory();
    return View('products.create');
}
public function edit($id)
{
    $record= $this->product->edit($id);
    return View('products.edit');
}
public function update(Request $request,$id){

    $this->product->update(['name'=>$request->name,'status'=>$request->status,'position'=>$request->position],$id);
    return redirect()->action('BannerController@index');
        
}
public function destroy($id)
{
   
    $this->product->delete($id);
    return redirect()->action('ProductController@index');

}
public function show($id)
{
    return View('products.show');
            
}
public function store(Request $request)
{
    $record= $this->product->create($request->all());
    if($request->hasFile('image')) utilities::uploadFile('image','img/categories/',$record->category_id,'jpeg');
    return redirect()->action('ProductController@index');
}

}
