<?php
namespace App\Helpers;

class Helper
{

    public static function IDGenerator($model, $trow, $length = 4, $prefix){
        $data = $model::orderBy('id','desc')->first();
        if(!$data){
            $og_length = $length;
            $last_number = '';
        }else{
            $code = substr($data->$trow, strlen($prefix)+1);
            $actial_last_number = ($code/1)*1;
            $increment_last_number = ((int)$actial_last_number)+1;
            $last_number_length = strlen($increment_last_number);
            $og_length = $length - $last_number_length;
            $last_number = $increment_last_number;
        }
        $zeros = "";
        for($i=0;$i<$og_length;$i++){
            $zeros.="0";
        }
        return $prefix.$zeros.$last_number;
    }
    public static function categoriesForSelect()
    {
        $data = \App\Models\Category::get(['id', 'name_' . \App::getLocale() . ' as name']);
    
        $returnData = [
            '' => __('Select Category')
        ];
        foreach ($data as $key => $value) {
            $returnData[$value->id] = $value->name;
        }
        return $returnData;
    }
    public static function tablePagination()
    {
        return new \App\Libs\TablePagination();
    }
 
    
  
}
?>