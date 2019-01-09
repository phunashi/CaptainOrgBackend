<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataAccessLayer\Repositories\Banner\BannerRepositoryInterface;

class BannerController extends Controller
{
    //

// space that we can use the repository from
protected $banner;

public function __construct(BannerRepositoryInterface $banner)
{
	$this->banner = $banner;
}
 

public function index()
{
    $banners= $this->banner->all();
    return View('banners.index')->with('banners',$banners);
}
public function create()
{
    return View('banners.create');
}
public function edit($id)
{
    $banner= $this->banner->edit($id);
    return View('banners.edit')->with('banner',$banner);
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
            $this->banner->update(['name'=>$request->name,'status'=>$request->status,'position'=>$request->position],$id);
            return redirect()->action('BannerController@index');
        
}
public function destroy($id)
{
   
    $this->banner->delete($id);
    return redirect()->action('BannerController@index');

}
public function show($id)
{
    return View('banners.show');
            
}
public function store(Request $request)
{
   
    //$this->validate($request, [
        //'body' => 'required|max:500'
  //  ]);
    // create record and pass in only fields that are fillable
     $this->banner->create(['name'=> $request->name,'status'=>$request->status,'position'=>$request->position]);
     return redirect()->action('BannerController@index');
}

}
