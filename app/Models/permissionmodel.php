<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permissionmodel extends Model
{
    use HasFactory;
    protected $table='permission';
    protected $PrimaryKey='id';
    static public function getRecord(){
        $result = array(); // Initialize result array
    
        // Fetch unique groups from the database
        $getpermission = permissionmodel::groupBy('groupby')->get();
    
        foreach ($getpermission as $value) {
            // Fetch permission group based on the current groupby value
            $getpermissionGroup = self::getpermissionGroup($value->groupby);
    
            $data = array();
            $data['id'] = $value->id;
            $data['name'] = $value->name;
    
            $group = array();
            foreach ($getpermissionGroup as $groupG) {
                $dataG = array();
                $dataG['id'] = $groupG->id;
                $dataG['name'] = $groupG->name;
                $group[] = $dataG; 
            }
            
            $data['group'] = $group; // 
            $result[] = $data; 
        }
    
        return $result; 
    }
    
    static public function getpermissionGroup($groupby){
        return permissionmodel::where('groupby', $groupby)->get();
    }
    

}
