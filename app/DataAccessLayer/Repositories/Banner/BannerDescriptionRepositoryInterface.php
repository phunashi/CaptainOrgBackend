<?php namespace App\DataAccessLayer\Repositories\Banner;

interface BannerDescriptionRepositoryInterface {

    public function all();

 
   // public function paginate($perPage = 15, $columns = array('*'));
 
    public function create(array $data);
    public function edit($id);
 
    public function update(array $data, $id);
 
    public function delete($id);
 
   // public function find($id, $columns = array('*'));
 
   // public function findBy($field, $value, $columns = array('*')); 


}





