<?php namespace  App\DataAccessLayer\Repositories\Category;
use App\DataAccessLayer\Models\category;
use  App\DataAccessLayer\Repositories\Category\CategoryRepositoryInterface;
class CategoryRepository implements CategoryRepositoryInterface
{
    protected $model;

    // Constructor to bind model to repo
    public function __construct(category $model)
    {
        $this->model = new category();
    }
    public function all()
    {
      $records= $this->model::paginate(10);
       return $records;
    }

    // create a new record in the database
    public function create(array $data)
    {
        
     $record=  $this->model->create(['image'=>isset($data['image'])?$data['image']->getClientOriginalName():null,
                    'parent_id'=>$data['parent_id'],
                    'sort_order'=>$data['sort_order'],
                    'status'=>$data['status'],
                    ])->categoryDescription()->create(['name'=>$data['name'],
                                                    'description'=>$data['description'],
                                                    'meta_title'=>$data['meta_title'],
                                                    'meta_description'=>$data['meta_description'],
                                                    'meta_keywords'=>$data['meta_keywords']
                                                    ]);
      return $record;
    }
    public function edit($id){

      $record= $this->model::find($id);
      return $record;

    }

     //update record in the database
    public function update(array $data, $id)
    {
        $record = $this->model::find($id);
        return $record->update($data);
    }

    //remove record from the database
    public function delete($id)
    {
      $record = $this->model::find($id);
      return $record->categoryDescription()->delete();
        
    }



}