<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataAccessLayer\Repositories\Attributes\AttributeRepositoryInterface;
class AttributeController extends Controller
{
// space that we can use the repository from
protected $attribute;

public function __construct(AttributeRepositoryInterface $attribute)
{
	$this->attribute = $attribute;
}
 

public function attribute_index()
{
    $attributes= $this->attribute->attribute_all();
    return View('attributes.attribute')->with('attributes',$attributes);
}
public function attribute_create()
{
    return View('attributes.attribute_create');
}
public function attribute_edit($id)
{
    $attributes= $this->attribute->attribute_edit($id);
    return View('attributes.attribute_edit')->with('attributes',$attributes);
}
public function attribute_update(Request $request,$id){
  
    $this->attribute->attribute_update($request->all());
    return redirect()->action('AttributeController@index');    
}
public function destroy($id)
{
   
    $this->attribute->attribute_delete($id);
    return redirect()->action('AttributeController@index');

}
public function show($id)
{
    return View('banners.show');
            
}
public function attribute_store(Request $request)
{
   
    
    // create record and pass in only fields that are fillable
     $this->attribute->attribute_create($request->all());
     return redirect()->action('BannerController@index');
}
}
