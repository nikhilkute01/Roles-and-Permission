<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rolemodel;
use App\Models\permissionmodel;
use App\Models\PermissionRoleModel;
class RoleController extends Controller
{
    public function list1(){
        $data=Rolemodel::get()->all();
        return view('Role/list')->with(compact('data'));
    }
    public function add(){
        $data=permissionmodel::getRecord();
        return view('Role/add')->with(compact('data'));
    }

    public function insert(Request $request){
        $save=new Rolemodel;
        $save->name=$request->name;
        $save->save();
        PermissionRoleModel::createupdateRecord($request->permission_id,$save->id);
        return redirect('add')->with('success','Role added');
    }

    public function edit($id) {
      
        $data = Rolemodel::find($id);
        $data2 = permissionmodel::getRecord();
        $roleIds = PermissionRoleModel::getroleid($id)->pluck('id')->toArray(); // Assuming getroleid returns a collectio
        return view('Role.edit', compact('data', 'data2', 'roleIds'));
    }
    public function update($id , Request $request){
        $role=Rolemodel::find($id);
        $role->name = $request->name();
        $role->save();
        return redirect('Role/add')->with('success','Role Updated successfully');
    }

    public function delete($id,Request $request){
        $data=Rolemodel::find($id);
        $data->delete();
        return redirect('role')->with('success','Role Deleted succesfully');
    }

}
