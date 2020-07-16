<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;

class Sightseeing_Controller extends Controller
{
    //crud module
    private $module = "sightseeing";

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
            'daydetail'=>$request->get('daydetail'),
            'duration'=>$request->get('duration'),
            'abouttour'=>$request->get('abouttour'),
            'code'=>$request->get('code'),
            'city'=>$request->get('city'),
            'country'=>$request->get('country'),
            'price'=>$request->get('price'),
            'sight_date'=>$request->get('sight_date'),
            'added_by'=>'0'
        ];//fill it with values to be processed
        $banner = $request->file('banner');
        if(isset($banner)){
            $image = $request->file('banner');
            $imgname = time().rand(1000,9999) . "." . $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/sightseeing');
            $image->move($destinationPath, $imgname);
            $data['banner']=$imgname;

        }


        $img_1 = $request->file('img_1');
        if(isset($img_1)){
            $image = $request->file('img_1');
            $imgname = time().rand(1000,9999)  . "." . $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/sightseeing');
            $image->move($destinationPath, $imgname);
            $data['img_1']=$imgname;
        }

        $img_2 = $request->file('img_2');
        if(isset($img_2)){
            $image = $request->file('img_2');
            $imgname = time().rand(1000,9999)  . "." . $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/sightseeing');
            $image->move($destinationPath, $imgname);
            $data['img_2']=$imgname;
        }

        $img_3 = $request->file('img_3');
        if(isset($img_3)){
            $image = $request->file('img_3');
            $imgname = time().rand(1000,9999)  . "." . $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/sightseeing');
            $image->move($destinationPath, $imgname);
            $data['img_3']=$imgname;
        }

        $img_4 = $request->file('img_4');
        if(isset($img_4)){
            $image = $request->file('img_4');
            $imgname = time().rand(1000,9999)  . "." . $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/sightseeing');
            $image->move($destinationPath, $imgname);
            $data['img_4']=$imgname;
        }
        $message_action = "";
        if ($id == "-1") {
            DB::table($this->module)->insert($data);
            $message_action = "Added";
        } else {
            DB::table($this->module)->where('id', $id)->update($data);
            $message_action = "Updated";
        }

        return redirect($this->module."/get")->with('success','Sight Seeing is '.$message_action);
    }



    public function delete($id){
        DB::table($this->module)->where('id',$id)->delete();
        return redirect($this->module."/get")->with('danger','Sightseeing is deleted');
    }
}
