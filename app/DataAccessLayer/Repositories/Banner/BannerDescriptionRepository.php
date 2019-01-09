<?php namespace  App\DataAccessLayer\Repositories\Banner;
use App\DataAccessLayer\Models\banner_description;
use  App\DataAccessLayer\Repositories\Banner\BannerDescriptionRepositoryInterface;
class BannerDescriptionRepository implements BannerDescriptionRepositoryInterface
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
   // public function __construct(Model $model)
   // {
    //    $this->model = $model;
    //}

    // Get all instances of model
   public function all()
    {
      $banners= banner_description::with('banner')->paginate(10);
     // $banners= banner_description::paginate(10);
       return $banners;
    }

    // create a new record in the database
    public function create(array $data)
    {
        $model= new banner_description();
         $model->create($data);
    }
    public function edit($id){

      $banner= banner_description::find($id);
      return $banner;

    }

     //update record in the database
    public function update(array $data, $id)
    {
        $record = banner_description::find($id);
        return $record->update($data);
    }

    //remove record from the database
    public function delete($id)
    {
      $banner = banner_description::find($id);
      return $banner->delete();
        
    }

    // show the record with the given id
  //  public function show($id)
  //  {
       // return $this->model-findOrFail($id);
  //  }

    // Get the associated model
   // public function getModel()
   // {
   //     return $this->model;
  //  }

    // Set the associated model
  //  public function setModel($model)
   // {
        //$this->model = $model;
       // return $this;
   // }

    // Eager load database relationships
   // public function with($relations)
   // {
      //  return $this->model->with($relations);
    //}
}