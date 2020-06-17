<?php

namespace App\Http\Controllers\ahmed;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class blog_controller extends Controller {
	public function view() {

		$blogs = DB::table('blogs')->paginate(4);

		return view('blogs.view', ['blogs' => $blogs]);

	}

	public function detail($id) {

		$blog = DB::table('blogs')
			->where('id', $id)
			->first();
		return view('blogs.detail', [

				'blog' => $blog,
			]);

	}

	public function autocompleteFetch(Request $request) {
		if ($request->get('query')) {
			$query  = $request->get('query');
			$data   = DB::table('countries')->where('name', 'LIKE', '%'.$query.'%')->get();
			$output = '<ul class="dropdown-menu"  style="display:block;position:relative">';
			foreach ($data as $row) {
				$output .= '<li><a href="#">'.$row->name.'</a></li>';
			}
		}
		$output .= '</ul>';
		echo $output;
	}
}
