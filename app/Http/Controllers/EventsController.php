<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;

class EventsController extends Controller
{
    //crud module
    private $module = "events";

    //for index page

    public function AllEvents(){
        $events = DB::table('events')->get();
        return view('events.show')->with('events',$events);
    }
    public function index()
    {
        $data['title'] = "All " . ucfirst($this->module);
        $data[$this->module] = DB::table($this->module)->get();
        return view($this->module.'.events', $data);// $this->>table applicable if the folder name and database table name is same
    }

    public function add(){
        return view($this->module.'.index');
    }

    public function DetailEvents($id){
        $events = DB::table('events')->where('id',$id)->get();
        return view('events.detail')->with('events',$events);
    }


    //for calling the single view for add/edit
    public function create_edit($action, $id)
    {
        $data['action'] = $action;
        $data['id'] = $id;
        if ($action == "edit") {
            $data[$this->module.'_data'] = DB::table($this->module)->where('id', $id)->get();
            $data['action'] = $action;
            $data['id'] = $id;
        }
        return view($this->module.'.edit', $data);
    }

    //for crud operations
    public function store_update(Request $request,$id)
    {
        $data = [
            'name'=>$request->get('name'),
            'date'=>$request->get('date'),
            'time'=>$request->get('time'),
            'code'=>$request->get('code'),
            'price'=>$request->get('price'),
            'description'=>$request->get('description'),
            'abouttour'=>$request->get('abouttour'),
            'daydetail'=>$request->get('daydetail'),
            'added_by'=>-1,
            'city'=>$request->get('city'),
            'country'=>$request->get('country'),

        ];



        $banner = $request->file('banner');
        if(isset($banner)){
            $image = $request->file('banner');
            $imgname = time() . "." . $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/events');
            $image->move($destinationPath, $imgname);
            $data['banner']=$imgname;
        }

        $img_1 = $request->file('img_1');
        if(isset($img_1)){
            $image = $request->file('img_1');
            $imgname = rand() . "." . $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/events');
            $image->move($destinationPath, $imgname);
            $data['img_1']=$imgname;
        }

        $img_2 = $request->file('img_2');
        if(isset($img_2)){
            $image = $request->file('img_2');
            $imgname = rand() . "." . $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/events');
            $image->move($destinationPath, $imgname);
            $data['img_2']=$imgname;
        }

        $img_3 = $request->file('img_3');
        if(isset($img_3)){
            $image = $request->file('img_3');
            $imgname = rand() . "." . $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/events');
            $image->move($destinationPath, $imgname);
            $data['img_3']=$imgname;
        }

        $img_4 = $request->file('img_4');
        if(isset($img_4)){
            $image = $request->file('img_4');
            $imgname = rand() . "." . $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/events');
            $image->move($destinationPath, $imgname);
            $data['img_4']=$imgname;
        }

//        if ($id == "-1") {
//            try{
//                DB::table($this->module)->insert($data);
//            }
//            catch (\Exception $e){
//                echo $e;
//            }
//        } else {
//            DB::table($this->module)->where('id', $id)->update($data);
//        }

        $message_action = "";
        if ($id == "-1") {
            DB::table($this->module)->insert($data);
            $message_action = "Added";
        } else {
            DB::table($this->module)->where('id', $id)->update($data);
            $message_action = "Updated";
        }

        return back()->with('message','danger-')->with('success','Event is '.$message_action);;
    }

    public function delete($id){
        DB::table($this->module)->where('id',$id)->delete();
        return back();
    }
}
