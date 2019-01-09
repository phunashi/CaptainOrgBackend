<?php namespace App\DataAccessLayer\Repositories\Product;

interface ProductRepositoryInterface {

    public function all();
    public function create(array $data);
    public function edit($id);
    public function update(array $data, $id);
    public function delete($id);


}





