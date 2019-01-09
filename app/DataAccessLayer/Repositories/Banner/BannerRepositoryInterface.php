<?php namespace App\DataAccessLayer\Repositories\Banner;

interface BannerRepositoryInterface {

    public function all();
    public function create(array $data);
    public function edit($id);
    public function update(array $data, $id);
    public function delete($id);


}





