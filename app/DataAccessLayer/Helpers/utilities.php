<?php namespace  App\DataAccessLayer\Helpers;
use Illuminate\Support\Facades\DB;
class utilities{
public static function save_image (){
//-----------------------save image --------------------------
    if (!empty($request->string_img)) {
       $img = str_replace(' ', '+', str_replace('data:image/jpeg;base64,', '', $request->string_img));
        $data = base64_decode($img);
        $filename = $record->category_id . ".jpeg";
        $file = public_path('img/categories/') . $filename;
        $success = file_put_contents($file, $data);
         $returnData = public_path('img/categories/') . $filename;
        $filename = $file;
    }
}
public static function uploadFile($name,$path,$fileName,$extension){
    move_uploaded_file($_FILES[$name]['tmp_name'], public_path($path). $fileName.'.'.$extension);
 }
 public function getJsonAttributes() {

    $jsonData = null;

    $db = DB::table('attributes')->select('attribute_id', 'name')->get();
    if (count($db)) {

        foreach (\collect($db) as $list) {

            $attributes[] = ['id' => $list->attribute_id, 'name' => $list->name];
        }
        $jsonData = ['attributes' => $attributes];
    } else {
        $jsonData = ['attributes' => []];
    }


    return \Illuminate\Support\Facades\Response::json($jsonData);
}

}
