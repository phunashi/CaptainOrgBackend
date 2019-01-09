<?php namespace  App\DataAccessLayer\Repositories\Attributes;
use App\DataAccessLayer\Models\attribute;
use  App\DataAccessLayer\Repositories\Attributes\AttributeRepositoryInterface;
class AttributeRepository implements AttributeRepositoryInterface
{
// model property on class instances
protected $model;

    // Constructor to bind model to repo
    public function __construct(attribute $model)
    {
        $this->model = new attribute();
    }

   public function attribute_all()
    {
      $records=$this->model::paginate(10);    
      return $records;
    }

    // create a new record in the database
    public function attribute_create(array $data)
    {
        $this->model->create($data);
    }
    public function attribute_edit($id)
    {
    
      return $this->model::find($id);
    }

     //update record in the database
    public function attribute_update(array $data, $id)
    {
       $record = $this->model::find($id);
        return $record->attribute_update($data);
    }

    //remove record from the database
    public function attribute_delete($id)
    {
       $record = $this->model::find($id);
        return $record->delete();        
    }
    public function attribute_group_all()
    {
      $records=$this->model::paginate(10);    
      return $records;
    }

    // create a new record in the database
    public function attribute_group_create(array $data)
    {
        $this->model->create($data);
    }
    public function attribute_group_edit($id)
    {
    
      return $this->model::find($id);
    }

     //update record in the database
    public function attribute_group_update(array $data, $id)
    {
       $record = $this->model::find($id);
        return $record->attribute_group_update($data);
    }

    //remove record from the database
    public function attribute_group_delete($id)
    {
       $record = $this->model::find($id);
        return $record->delete();        
    }
 
}