<?php

namespace App\Http\Controllers\ahmed;

use App;
use App\Activity;
use App\Http\Controllers\Controller;
use DB;

class BookNowController extends Controller {

	public function index() {
		$activities = DB::table('activities')->paginate(3);
		$cruises    = DB::table('cruises')->paginate(3);
		$daytours   = DB::table('daytours')->paginate(3);
		$transfers  = DB::table('transfers')->paginate(3);
		$packages   = DB::table('packages')->paginate(3);
		$icons      = DB::table('package_icons')->paginate(3);
		return view('booknow/index')->with([
				'activities' => $activities,
				'cruises'    => $cruises,
				'daytours'   => $daytours,
				'transfers'  => $transfers,
				'packages'   => $packages,
				'icons'      => $icons,

			]);

	}

	public function all_packages() {
		$packages = DB::table('packages')->get();
		$icons    = DB::table('package_icons')->get();
		return view('booknow/all_packages')->with([
				'packages' => $packages,
				'icons'    => $icons,

			]);

	}

	public function all_activities() {

		$activities = Activity::with('getcity')->paginate(3);
		$icons      = DB::table('package_icons')->get();
		return view('booknow/all_activities')->with([
				'activities' => $activities,
				'icons'      => $icons,

			]);

	}

	public function all_cruises() {
		$cruises = DB::table('cruises')->get();
		$icons   = DB::table('package_icons')->get();
		return view('booknow/all_cruises')->with([
				'cruises' => $cruises,
				'icons'   => $icons,

			]);

	}

	public function all_transfers() {
		$transfers = DB::table('transfers')->get();
		$icons     = DB::table('package_icons')->get();
		return view('booknow/all_transfers')->with([
				'transfers' => $transfers,
				'icons'     => $icons,

			]);

	}

	public function all_daytours() {
		$daytours = DB::table('daytours')->get();
		$icons    = DB::table('package_icons')->get();
		return view('booknow/all_daytours')->with([
				'daytours' => $daytours,
				'icons'    => $icons,

			]);

	}

	public function index_grid() {
		$activities = DB::table('activities')->paginate(3);
		$cruises    = DB::table('cruises')->paginate(3);
		$daytours   = DB::table('daytours')->paginate(3);
		$transfers  = DB::table('transfers')->paginate(3);
		$packages   = DB::table('packages')->paginate(3);
		$icons      = DB::table('package_icons')->paginate(3);
		return view('booknow/index_grid')->with([
				'activities' => $activities,
				'cruises'    => $cruises,
				'daytours'   => $daytours,
				'transfers'  => $transfers,
				'packages'   => $packages,
				'icons'      => $icons,

			]);
	}

	public function list_city($city) {

		$activities = Activity::find(50003)->activity_city;
		dd($activities->toArray());
		$icons = DB::table('package_icons')->get();
		return view('booknow/all_activities')->with([
				'activities' => $activities,
				'icons'      => $icons,

			]);

	}

}
