<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PackagesController extends Controller
{
    //crud module
    private $module = "packages";

    //for index page
    public function index()
    {
        $data['title'] = "All " . ucfirst($this->module);
        $data[$this->module] = DB::table($this->module)->get();
        $data['packagecat'] = DB::table('package_cat')->get();
        return view($this->module.'.index', $data);// $this->>table applicable if the folder name and database table name is same
    }

    //for calling the single view for add/edit
    public function create_edit($action, $id)
    {
        $data['action'] = "store";
        $data['id'] = $id;
        $data['packagecat'] = DB::table('package_cat')->get();
        if ($action == "edit") {
            $data[$this->module.'_data'] = DB::table($this->module)->where('id', $id)->get();
            $data['action'] = "update";
            $data['id'] = $id;
        }

        return view($this->module.'.create_edit', $data);
    }

    public function PackagesDetails($id)
    {
        $packages = DB::table('packages')->where('id',$id)->get();
        return view('packages.detail')->with('packages',$packages);

    }

    public function Packages()
    {
        $packages = DB::table('packages')->get();
        return view('packages.packages')->with('packages',$packages);

    }

    public function geoLocation($lng,$lat,$city)
    {
        return view('packages.map')->with('lng',$lng)->with('lat',$lat)->with('name',$city);
    }

    //for crud operations
    public function store_update($id , Request $request)
    {
        $data = [
            'cat_id' =>$request->get('cat_id'),
            'pack_name' =>$request->get('pack_name'),
            'city' =>$request->get('city'),
            'country' =>$request->get('country'),
            'description' =>$request->get('description'),
            'duration'=>$request->get('duration'),
            'discount' =>$request->get('discount'),
            'location' => str_replace(array('LatLng',')','('), "", $request->get('location') ),
            'date' =>$request->get('date'),
            'price' =>$request->get('price'),
            'daydetail'=>$request->get('daydetail'),
            'abouttour'=>$request->get('abouttour'),
            'code' =>$request->get('code'),
            'added_by' =>-1,
            //'banner'=>$request->get('banner')

        ];//fill it with values to be processed
        $banner = $request->file('banner');
        if(isset($banner)){
            $image = $request->file('banner');
            $imgname = time() .rand(1000,9999). "." . $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/packages');
            $image->move($destinationPath, $imgname);
            $data['banner']=$imgname;
        }


        $img_1 = $request->file('img_1');
        if(isset($img_1)){
            $image = $request->file('img_1');
            $imgname = time() .rand(1000,9999). "." . $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/packages');
            $image->move($destinationPath, $imgname);
            $data['img_1']=$imgname;
        }

        $img_2 = $request->file('img_2');
        if(isset($img_2)){
            $image = $request->file('img_2');
            $imgname = time() .rand(1000,9999). "." . $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/packages');
            $image->move($destinationPath, $imgname);
            $data['img_2']=$imgname;
        }

        $img_3 = $request->file('img_3');
        if(isset($img_3)){
            $image = $request->file('img_3');
            $imgname = time() .rand(1000,9999). "." . $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/packages');
            $image->move($destinationPath, $imgname);
            $data['img_3']=$imgname;
        }

        $img_4 = $request->file('img_4');
        if(isset($img_4)){
            $image = $request->file('img_4');
            $imgname = time().rand(1000,9999)  . "." . $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/packages');
            $image->move($destinationPath, $imgname);
            $data['img_4']=$imgname;
        }



        if ($id == "-1") {
            DB::table($this->module)->insert($data);
            $message_action = "Added";

        } else {
            DB::table($this->module)->where('id', $id)->update($data);
            $message_action = "Updated";
        }

        return redirect($this->module."/get")->with('success','Packages is '.$message_action);
    }


    public function delete($id){
        DB::table($this->module)->where('id',$id)->delete();
        return redirect($this->module."/get")->with('danger','Packages is deleted');

    }



}
