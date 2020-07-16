<?php

namespace App\Http\Controllers\ahmed;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = DB::table('services')->get();
        return view('services/index', compact('services'));
    }

    public function view_vision()
    {
        $services = DB::table('services')->where('id', '1')->first();
        return view('services/add', compact('services'));
    }

    public function add_service(Request $request)
    {
        $title  = $request->get('title');
        $desc   = $request->get('desc');
        $values = array('title' => $title, 'description' => $desc);
        $status = DB::table('services')->insert($values);

        if ($status) {
            return redirect()->route('services.view.vision')->with('success', 'Service inserted  successfully ');
        } else {
            return redirect()->route('services.view.vision')->with('error', 'Current operation failed ');
        }

    }

    public function all_service()
    {
        $services = DB::table('services')->get();
        return view('services/all_services', compact('services'));
    }

    public function update_service($id)
    {
        $services = DB::table('services')->where('id', $id)->first();
        return view('services/update', compact('services'));
    }

    public function post_update_service(Request $request)
    {
        $title = $request->get('title');
        $desc  = $request->get('desc');
        $id = $request->get('id');
        $udpate = DB::table('services')->where('id', $id)->update(['title' => $title, 'description' => $desc]);

        if ($udpate) {
            return redirect()->route('services.all.services')->with('success', 'Service udapted  successfully ');
        } else {
            return redirect()->route('services.all.services')->with('error', 'Current operation failed ');
        }

    }

    public function post_delete_service($id){



    	 $status = DB::table('services')
            ->where('id', $id)
            ->delete();

            if ($status) {
            return redirect()->route('services.all.services')->with('success', 'Service deleted  successfully ');
        } else {
            return redirect()->route('services.all.services')->with('error', 'Current operation failed ');
        }


    }

}
