<?php

namespace App\Http\Controllers\ahmed;

use App;
use App\Http\Controllers\Controller;
use DB;

class BookNowController extends Controller {

	public function index() {
		$activities = DB::table('activities')->paginate(3);
		$cruises = DB::table('cruises')->paginate(3);
		$daytours = DB::table('daytours')->paginate(3);
		$transfers = DB::table('transfers')->paginate(3);
		$packages = DB::table('packages')->paginate(3);
		$icons = DB::table('package_icons')->paginate(3);
		return view('booknow/index')->with([
			'activities' => $activities,
			'cruises' => $cruises,
			'daytours' => $daytours,
			'transfers' => $transfers,
			'packages' => $packages,
			'icons' => $icons,

		]);

	}

	public function all_packages() {
		$packages = DB::table('packages')->paginate(3);
		$icons = DB::table('package_icons')->get();
		return view('booknow/all_packages')->with([
			'packages' => $packages,
			'icons' => $icons,

		]);

	}

	public function all_activities() {

		$activities = DB::table('activities')->paginate(3);
		$icons = DB::table('package_icons')->get();
		return view('booknow/all_activities')->with([
			'activities' => $activities,
			'icons' => $icons,

		]);

	}

	public function all_cruises() {
		$cruises = DB::table('cruises')->paginate(3);
		$icons = DB::table('package_icons')->get();
		return view('booknow/all_cruises')->with([
			'cruises' => $cruises,
			'icons' => $icons,

		]);

	}

	public function all_transfers() {
		$transfers = DB::table('transfers')->paginate(3);
		$icons = DB::table('package_icons')->get();
		return view('booknow/all_transfers')->with([
			'transfers' => $transfers,
			'icons' => $icons,

		]);

	}

	public function all_daytours() {
		$daytours = DB::table('daytours')->paginate(3);
		$icons = DB::table('package_icons')->get();
		return view('booknow/all_daytours')->with([
			'daytours' => $daytours,
			'icons' => $icons,

		]);

	}

	public function index_grid() {
		$activities = DB::table('activities')->paginate(3);
		$cruises = DB::table('cruises')->paginate(3);
		$daytours = DB::table('daytours')->paginate(3);
		$transfers = DB::table('transfers')->paginate(3);
		$packages = DB::table('packages')->paginate(3);
		$icons = DB::table('package_icons')->paginate(3);
		return view('booknow/index_grid')->with([
			'activities' => $activities,
			'cruises' => $cruises,
			'daytours' => $daytours,
			'transfers' => $transfers,
			'packages' => $packages,
			'icons' => $icons,

		]);
	}

	public function list_city($city, $type) {
		if ($type == 'booknow') {
			$activities = DB::table('activities')
				->join('cities', 'cities.fkey', '=', 'activities.id')
				->where('cities.name', $city)
				->select('activities.*')
				->paginate(3);

			$daytours = DB::table('daytours')
				->join('cities', 'cities.fkey', '=', 'daytours.id')
				->where('cities.name', $city)
				->select('daytours.*')
				->paginate(3);

			$packages = DB::table('packages')
				->join('cities', 'cities.fkey', '=', 'packages.id')
				->where('cities.name', $city)
				->select('packages.*')
				->paginate(3);

			$transfers = DB::table('transfers')
				->join('cities', 'cities.fkey', '=', 'transfers.id')
				->where('cities.name', $city)
				->select('transfers.*')
				->paginate(3);
			$cruises = DB::table('cruises')
				->join('cities', 'cities.fkey', '=', 'cruises.id')
				->where('cities.name', $city)
				->select('cruises.*')
				->paginate(3);
			$packages = DB::table('packages')->paginate(3);
			$icons = DB::table('package_icons')->paginate(3);

			return view('booknow/index')->with([
				'activities' => $activities,
				'cruises' => $cruises,
				'daytours' => $daytours,
				'transfers' => $transfers,
				'packages' => $packages,
				'icons' => $icons,

			]);
		} else {
			$view_name = "booknow/" . $type;
			$type_model = substr($type, 4);
			$model_name = $type_model;
			$model_name = DB::table($type_model)
				->join('cities', 'cities.fkey', '=', $type_model . '.id')
				->where('cities.name', $city)
				->select($type_model . '.*')
				->paginate(3);
			$icons = DB::table('package_icons')->paginate(3);
			return view($view_name)->with([
				$type_model . '' => $model_name,
				'icons' => $icons,

			]);
		}

	}

	public function list_category($category, $type) {
		if ($type == 'booknow') {
			$activities = DB::table('activities')
				->join('categories', 'categories.fkey', '=', 'activities.id')
				->where('categories.name', $category)
				->select('activities.*')
				->paginate(3);

			$daytours = DB::table('daytours')
				->join('categories', 'categories.fkey', '=', 'daytours.id')
				->where('categories.name', $category)
				->select('daytours.*')
				->paginate(3);

			$packages = DB::table('packages')
				->join('categories', 'categories.fkey', '=', 'packages.id')
				->where('categories.name', $category)
				->select('packages.*')
				->paginate(3);

			$transfers = DB::table('transfers')
				->join('categories', 'categories.fkey', '=', 'transfers.id')
				->where('categories.name', $category)
				->select('transfers.*')
				->paginate(3);
			$cruises = DB::table('cruises')
				->join('categories', 'categories.fkey', '=', 'cruises.id')
				->where('categories.name', $category)
				->select('cruises.*')
				->paginate(3);
			$packages = DB::table('packages')->paginate(3);
			$icons = DB::table('package_icons')->paginate(3);

			return view('booknow/index')->with([
				'activities' => $activities,
				'cruises' => $cruises,
				'daytours' => $daytours,
				'transfers' => $transfers,
				'packages' => $packages,
				'icons' => $icons,

			]);
		} else {
			$view_name = "booknow/" . $type;
			$type_model = substr($type, 4);
			$model_name = $type_model;
			$model_name = DB::table($type_model)
				->join('categories', 'categories.fkey', '=', $type_model . '.id')
				->where('categories.name', $category)
				->select($type_model . '.*')
				->paginate(3);
			$icons = DB::table('package_icons')->paginate(3);
			return view($view_name)->with([
				$type_model . '' => $model_name,
				'icons' => $icons,

			]);
		}
	}

	public function list_country($country, $type) {
		if ($type == 'booknow') {
			$activities = DB::table('activities')
				->join('countries', 'countries.fkey', '=', 'activities.id')
				->where('countries.name', $country)
				->select('activities.*')
				->paginate(3);

			$daytours = DB::table('daytours')
				->join('countries', 'countries.fkey', '=', 'daytours.id')
				->where('countries.name', $country)
				->select('daytours.*')
				->paginate(3);

			$packages = DB::table('packages')
				->join('countries', 'countries.fkey', '=', 'packages.id')
				->where('countries.name', $country)
				->select('packages.*')
				->paginate(3);

			$transfers = DB::table('transfers')
				->join('countries', 'countries.fkey', '=', 'transfers.id')
				->where('countries.name', $country)
				->select('transfers.*')
				->paginate(3);
			$cruises = DB::table('cruises')
				->join('countries', 'countries.fkey', '=', 'cruises.id')
				->where('countries.name', $country)
				->select('cruises.*')
				->paginate(3);
			$packages = DB::table('packages')->paginate(3);
			$icons = DB::table('package_icons')->paginate(3);

			return view('booknow/index')->with([
				'activities' => $activities,
				'cruises' => $cruises,
				'daytours' => $daytours,
				'transfers' => $transfers,
				'packages' => $packages,
				'icons' => $icons,

			]);
		} else {
			$view_name = "booknow/" . $type;
			$type_model = substr($type, 4);
			$model_name = $type_model;
			$model_name = DB::table($type_model)
				->join('countries', 'countries.fkey', '=', $type_model . '.id')
				->where('countries.name', $country)
				->select($type_model . '.*')
				->paginate(3);
			$icons = DB::table('package_icons')->paginate(3);
			return view($view_name)->with([
				$type_model . '' => $model_name,
				'icons' => $icons,

			]);
		}
	}

}
