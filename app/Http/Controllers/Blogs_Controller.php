<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;

class Blogs_Controller extends Controller
{
    //crud module
    private $module = "blogs";

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
        $data['back'] = $id;
        if ($action == "edit") {
            $data[$this->module.'_data'] = DB::table($this->module)->where('id', $id)->get();
            $data['action'] = "update";
            $data['id'] = $id;
        }
        return view($this->module.'.create_edit', $data);
    }

    //for crud operations
    public function store_update($id,Request $request)
    {
        $data = [
            'name'=>$request->get('name'),
            'description'=>$request->get('description'),
            'added_by'=>'0'
        ];//fill it with values to be processed
        $banner = $request->file('banner');
        if(isset($banner)){
            $image = $request->file('banner');
            $imgname = time() . "." . $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/blogs');
            $image->move($destinationPath, $imgname);
            $data['banner']=$imgname;

        }
        $message_action = "";
        if ($id == "-1") {
            DB::table($this->module)->insert($data);
            $message_action = "Added";
        } else {
            DB::table($this->module)->where('id', $id)->update($data);
            $message_action = "Updated";
        }

        return redirect($this->module."/get")->with('success','Blog is '.$message_action);
    }

    public function delete($id){
        DB::table($this->module)->where('id',$id)->delete();
        return redirect($this->module."/get")->with('danger','Blog is deleted');
    }
}


// while(PM(PTI_Imran_Khan)!=Reached){
//     foreach($Employee as $dummy){
//         $dummy->Reherse();
//     }
// }


// Do(reherse())
// While(PM(I_K)!=reached());