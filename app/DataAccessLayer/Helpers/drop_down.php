<?php namespace  App\DataAccessLayer\Helpers;
 use Illuminate\Support\Facades\DB;
class drop_down{


function load_banner()
{

    $records=\App\DataAccessLayer\Models\banner::all('banner_id','name');
    return $records;

}
function load_attribute()
{
    $records=\App\DataAccessLayer\Models\attribute::all('attribute_id','name');
    return $records;   
}
    
public function getParentCategory() {
    $query = DB::connection('pgsql')->select("WITH RECURSIVE parentCategory (id, level, name, name_path) AS (
                                                SELECT  categories.category_id, 0, category_descriptions.name, ARRAY[category_descriptions.name]
                                                FROM    categories join category_descriptions on categories.category_id=category_descriptions.category_id
                                                WHERE   categories.parent_id is null
                                                UNION ALL
                                                SELECT  category_descriptions.category_id, t0.level + 1, category_descriptions.name, ARRAY_APPEND(t0.name_path, category_descriptions.name)
                                                FROM    categories   join category_descriptions  on categories.category_id=category_descriptions.category_id 
                                                INNER JOIN parentCategory t0 ON t0.id = categories.parent_id)
                                                SELECT  id, level, name_path[1] AS category, ARRAY_TO_STRING(name_path, '>') AS parent
                                                FROM    parentCategory");
    return collect($query)->map(function($x){ return (array) $x; })->toArray(); 


    
    
}


}