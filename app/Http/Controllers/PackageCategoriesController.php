<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PackageCategoriesController extends Controller
{
    //crud module
    private $module = "package_cat";

    //for index page
    public function index()
    {
        $data['title'] = "All " . ucfirst($this->module);
        $data[$this->module] = DB::table($this->module)->get();
        return view($this->module.'.index', $data);// $this->>table applicable if the folder name and database table name is same
    }

    //for calling the single view for add/edit
    public function create_edit($action, $id)
    {
        $data['action'] = "store";
        $data['id'] = $id;
        if ($action == "edit") {
            $data[$this->module.'_data'] = DB::table($this->module)->where('id', $id)->get();
            $data['action'] = "update";
            $data['id'] = $id;
        }
        return view($this->module.'.create_edit', $data);
    }

    //for crud operations
    public function store_update($id , Request $request)
    {
        $data = [
            'name' =>$request->get('name'),
            'added_by' =>-1
            ];




        if ($id == "-1") {
            DB::table($this->module)->insert($data);
            $message_action = 'Added';
        } else {
            DB::table($this->module)->where('id', $id)->update($data);
            $message_action = 'Updated';
        }

        return redirect("/admin/package_cat/show")->with('success','Packages Category is '.$message_action);

    }


    public function delete($id){
        DB::table($this->module)->where('id',$id)->delete();
        return redirect($this->module."/get")->with('danger','Packages Category is deleted');


    }





}
