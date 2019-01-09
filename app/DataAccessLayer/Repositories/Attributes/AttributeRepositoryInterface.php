<?php namespace  App\DataAccessLayer\Repositories\Attributes;
interface AttributeRepositoryInterface
{

    public function attribute_all();
    // create a new record in the database
    public function attribute_create(array $data);
    public function attribute_edit($id);   
     //update record in the database
    public function attribute_update(array $data, $id);
    //remove record from the database
    public function attribute_delete($id);
   

    
}