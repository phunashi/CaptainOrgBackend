<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataAccessLayer\Repositories\Banner\BannerDescriptionRepositoryInterface;
use App\DataAccessLayer\Helpers\drop_down;
class BannerDescriptionController extends Controller
{
    //
    // space that we can use the repository from
protected $banner_description;

public function __construct(BannerDescriptionRepositoryInterface $banner_description)
{
	$this->banner_description = $banner_description;
}
 

public function index()
{
    $banner_descriptions= $this->banner_description->all();
    return View('banner_descriptions.index')->with('banner_descriptions',$banner_descriptions);
}
public function create()

{
  
  $load_banners=(new drop_down())->load_banner();
    return View('banner_descriptions.create')->with('load_banners',$load_banners);
}
public function edit($id)
{
    $load_banners=(new drop_down())->load_banner();
    $banner= $this->banner_description->edit($id);
    return View('banner_descriptions.edit')->with(['banner'=>$banner,'load_banners'=>$load_banners]);
}
public function update(Request $request,$id){

 
            // store
            //$nerd = Nerd::find($id);
            //$nerd->name       = Input::get('name');
            //$nerd->email      = Input::get('email');
           // $nerd->nerd_level = Input::get('nerd_level');
           // $nerd->save();

            // redirect
            //Session::flash('message', 'Successfully updated nerd!');
            $this->banner_description->update(['name'=>$request->name,'status'=>$request->status,'position'=>$request->position],$id);
            return redirect()->action('BannerDescriptionController@index');
        
}
public function destroy($id)
{
   
    $this->banner_description->delete($id);
    return redirect()->action('BannerDescriptionController@index');

}
public function show($id)
{
    return View('banner_descriptions.show');
            
}
public function store(Request $request)
{
   
    //$this->validate($request, [
        //'body' => 'required|max:500'
  //  ]);
    // create record and pass in only fields that are fillable
     $this->banner_description->create($request->all());
     return redirect()->action('BannerDescriptionController@index');
}
}
