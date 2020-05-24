<?php

namespace App\Http\Controllers\ahmed;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class blog_controller extends Controller
{
    public function view(){

    	$blogs=DB::table('blogs')->paginate(4);


    	return view ('blogs.view',['blogs'=>$blogs]);

    	}


    	public function detail($id){


    		$blog=DB::table('blogs')
			->where('id',$id)
    		->first();
    		return view('blogs.detail',[


    					'blog'=>$blog
    				]);

    	}

}
