<?php
namespace App\Http\Controllers\ahmed;
use App;
use App\Category;
use App\City;
use App\Country;
use App\Cruise;
use App\File;
use App\Http\Controllers\Controller;
use App\Image;
use App\Package_Icon;
use DB;
use Illuminate\Http\Request;
use PDF;
use Validator;

class cruise_controller extends Controller {
	private $base_url;

	public function __construct() {

		$this->base_url = url('/');

	}
	public function view() {

		$cruises = Cruise::with('getcity')->get();
		return view('cruises/index', [
			'cruises' => $cruises,
		]);
	}
	public function add() {
		$all_categories = DB::table('package_cat')
			->where('class', 'cruise')
			->get();
		// $city_list=DB::table('city_list')
		//                   ->get();
		$country_list = DB::table('country_list')
			->get();
		$icons = DB::table('icons')
			->get();
		return view('cruises/add', [
			'packagecat' => $all_categories,
			'icons' => $icons,
			// 'city_list'=>$city_list,
			'country_list' => $country_list,
		]);
	}
	//     public function cityByCountry($country){
	//    $country_selected = DB::table('country_list')
	//                      ->where('name',$country)
	//                      ->first();
	//   $city_list         = DB::table('city_list')
	//                      ->join('states', 'states.id', '=', 'city_list.state_id')
	//                      ->join('country_list', 'country_list.id', '=', 'states.country_id')
	//                      ->where('country_list.id', '=', $country_selected->id)
	//                      ->select('city_list.name')
	//                      ->get();
	// $html                 = view('cruises/city',compact('city_list'))->render();
	// return                 response()->json([$html]);
	//     }
	public function insert(Request $request) {
		$validator = Validator::make($request->all(), [
			// 'name'                    =>'required',
			// 'city'                 =>'required',
			// 'country'                 =>'required',
			// 'cat'                  =>'required',
			// 'desc'                    =>'required',
			// 'file'                    =>'required',
			// 'img'                     =>'required',
			// 'about'                   =>'required',
			// 'day_detail'              =>'required',
			// 'duration'                =>'required',
			// 'disc'                    =>'required',
			// 'date'                    =>'required',
			// 'price'                   =>'required',
			// 'code'                    =>'required',
		]);
		if ($validator->fails()) {
			return redirect('/cruise/add')
				->withErrors($validator)
				->withInput();

		} else {
			$input = $request->all();

			$first_file = '';
			$first_img = '';
			$last_cruise_id = 0;
			$last_cruise = Cruise::orderBy('created_at', 'desc')->first();
			if ($last_cruise != null) {
				$last_cruise_id = $last_cruise->id + 1;
			} else {
				$last_cruise_id = 10001;
			}
			if ($request->hasFile('img')) {
				$images = $request->file('img');
				foreach ($images as $img) {

					$extension = $img->getClientOriginalExtension();
					$image_name = time() . rand(1000, 9999) . "_." . $extension;
					$path = public_path('/storage/cruises_images/');
					$img->move($path, $image_name);
					$img_path = $this->base_url . '/public/storage/cruises_images/' . $image_name;
					$newimage = new Image;
					$newimage->fkey = $last_cruise_id;
					$newimage->src = $img_path;
					$newimage->name = $image_name;
					$newimage->save();

				}
				$first_img = DB::table('images')
					->where('fkey', $last_cruise_id)
					->first();

			}

			if ($request->hasFile('file')) {
				$files = $request->file('file');
				if (count($files) > 0) {
					foreach ($files as $file) {
						$extension = $file->getClientOriginalExtension();
						$file_name = time() . rand(1000, 9999) . "_." . $extension;
						$path = public_path('/storage/cruise_files/');
						$file->move($path, $file_name);
						$file_path = $this->base_url . '/public/storage/cruise_files/' . $file_name;
						$newimage = new File;
						$newimage->fkey = $last_cruise_id;
						$newimage->src = $file_path;
						$newimage->name = $file_name;
						$newimage->save();
					}

				}

				// $first_file=DB::table('files')
				// ->where('fkey',$last_Cruise_id)
				// ->first();
			}

			$new_cruise = new Cruise;
			$new_cruise->id = $last_cruise_id;
			$new_cruise->name = $request->input('name');
			//$new_cruise->city              =$request->input('city');
			//$new_cruise->country           =$country;
			/*  $new_cruise->cat             =$request->input('cat');*/
			$new_cruise->desc = $request->input('desc');
			if ($first_img) {
				$new_cruise->banner = $first_img->src;
				$new_cruise->img = $first_img->src;
			}
			$new_cruise->about = $request->input('about');
			$new_cruise->day_detail = $request->input('day_detail');
			$exclusion = $request->input('exclusion');
			$inclusion = $request->input('inclusion');
			$new_cruise->duration = $request->input('duration');
			$new_cruise->disc = $request->input('disc');
			$new_cruise->price = $request->input('price');
			$new_cruise->code = $request->input('code');
			$new_cruise->terms = $request->input('terms');
			$new_cruise->payment_policy = $request->input('payment_policy');
			$new_cruise->payment_methods = $request->input('payment_methods');
			$new_cruise->cancellation_policy = $request->input('cancellation_policy');
			$new_cruise->visa_info = $request->input('visa_info');
			$new_cruise->notes = $request->input('notes');
			$new_cruise->questions = $request->input('questions');
			$new_cruise->grpsize = $request->input('grpsize');
			$new_cruise->tourcode = $request->input('tourcode');
			$new_cruise->destinations = $request->input('destinations');
			$new_cruise->startloc = $request->input('startloc');
			$new_cruise->tourstyle = $request->input('tourstyle');
			$new_cruise->tourlanguage = $request->input('tourlanguage');
			$new_cruise->avalibilitydetails = $request->input('avalibilitydetails');
			$new_cruise->tranportdetails = $request->input('tranportdetails');
			$new_cruise->accomodationdetails = $request->input('accomodationdetails');
			$new_cruise->mealdetails = $request->input('mealdetails');
			$new_cruise->guidedetails = $request->input('guidedetails');
			$new_cruise->status = $request->input('status');
			$new_cruise->save();
			if ($new_cruise) {
				/*new code */
				$icons = $request->input('icons');
				if (count($icons) > 0) {
					foreach ($icons as $icon) {
						Package_Icon::create([
							'fkey' => $last_cruise_id,
							'name' => $icon,
							'of' => "cruise",
						]);
					}
				}
				/*new code */
				$countries = $request->input('country');
				if (count($countries) > 0) {
					foreach ($countries as $country) {
						Country::create([
							'fkey' => $last_cruise_id,
							'name' => $country,
							'of' => "cruise",
						]);
					}
				}
				$categories = $request->input('cat');
				if (count($categories) > 0) {
					foreach ($categories as $category) {
						Category::create([
							'fkey' => $last_cruise_id,
							'name' => $category,
							'of' => "cruise",
						]);
					}
				}

				$cities = explode(",", $request->input('city'));
				if (count($cities) > 0) {
					foreach ($cities as $city) {
						City::create([
							'fkey' => $last_cruise_id,
							'name' => $city,
							'of' => "cruise",
						]);
					}
					DB::table('cities')
						->where('fkey', $last_cruise_id)
						->where('name', '')
						->delete();
				}
				return redirect()->route('cruise.add')->with('success', 'Cruise  added successfully ');

			} else {
				return redirect()->route('cruise.add')->with('error', 'Operation failed  ');
			}

		}
	}
	public function update($id) {
		$item_city[] = [];
		$item_category[] = [];
		$item_icon[] = []; //new code
		$cruise = DB::table('cruises')
			->where('id', $id)
			->first();
		$citynames = DB::table('cities')
			->select('name')
			->where('fkey', $cruise->id)
			->get();
		$packagecat = DB::table('package_cat')
			->where('class', 'cruise')
			->get()
			->toArray();
		/*new code */
		$all_icons = DB::table('icons')
			->get()
			->toArray();
		$icons = DB::table('package_icons')
			->where('fkey', $id)
			->where('of', 'cruise')
			->get()
			->toArray();
		foreach ($icons as $item) {
			$item_icon[] = $item->name;
		}
		/*new code */
		$selected1 = DB::table('categories')
			->where('fkey', $id)
			->where('of', "cruise")
			->get()
			->toArray();
		foreach ($selected1 as $item) {
			$item_category[] = $item->name;
		}
		$selected = DB::table('countries')
			->where('fkey', $id)
			->where('of', "cruise")
			->get()
			->toArray();
		foreach ($selected as $item) {
			$item_city[] = $item->name;
		}
		$country_list = DB::table('country_list')
			->get()
			->toArray();
		if ($cruise) {
			return view('cruises/update')->with([
				'cruise' => $cruise,
				'packagecat' => $packagecat,
				'country_list' => $country_list,
				'item_city' => $item_city,
				'item_category' => $item_category,
				'citynames' => $citynames,
				'all_icons' => $all_icons,
				'item_icon' => $item_icon,

			]);
		} else {
			return redirect()->route('cruise.view')->with('error', 'Operation failed  ');
		}
	}
	public function edit(Request $request) {
		$validator = Validator::make($request->all(), [
			// 'name'                    =>'required',
			// 'city'                 =>'required',
			// 'country'                 =>'required',
			// 'cat'                  =>'required',
			// 'desc'                    =>'required',
			// 'file'                    =>'required',
			// 'img'                     =>'required',
			// 'about'                   =>'required',
			// 'day_detail'              =>'required',
			// 'duration'                =>'required',
			// 'disc'                    =>'required',
			// 'date'                    =>'required',
			// 'price'                   =>'required',
			// 'code'                    =>'required',
		]);
		if ($validator->fails()) {
			return redirect('/cruise/update')
				->withErrors($validator)
				->withInput();

		} else {
			$first_image = '';
			$first_file = '';
			$input = $request->all();
			$updated_cruise_id = $request->input('id');
			if ($request->hasFile('img')) {
				$all_img = DB::table('images')
					->where('fkey', $updated_cruise_id)
					->get();
				foreach ($all_img as $fil) {
					$db_path = $fil->src;
					$len = strlen($this->base_url . "/");
					$new_path = substr($db_path, $len, strlen($db_path) - $len);
					unlink($new_path);
				}
				$all_img = DB::table('images')
					->where('fkey', $updated_cruise_id)
					->delete();
				$images = $request->file('img');
				foreach ($images as $img) {

					$extension = $img->getClientOriginalExtension();
					$image_name = time() . rand(1000, 9999) . "_." . $extension;
					$path = public_path('/storage/cruise_images/');
					$img->move($path, $image_name);
					$img_path = $this->base_url . '/public/storage/cruise_images/' . $image_name;
					$newimage = new Image;
					$newimage->fkey = $updated_cruise_id;
					$newimage->src = $img_path;
					$newimage->name = $image_name;
					$newimage->save();

				}

			}
			if ($request->hasFile('file')) {
				$all_files = DB::table('files')
					->where('fkey', $updated_cruise_id)
					->get();
				foreach ($all_files as $fil) {
					$db_path = $fil->src;
					$len = strlen($this->base_url . "/");
					$new_path = substr($db_path, $len, strlen($db_path) - $len);
					unlink($new_path);
				}
				$all_files = DB::table('files')
					->where('fkey', $updated_cruise_id)
					->delete();
				$files = $request->file('file');
				foreach ($files as $file) {
					$extension = $file->getClientOriginalExtension();
					$file_name = time() . rand(1000, 9999) . "_." . $extension;
					$path = public_path('/storage/cruise_files/');
					$file->move($path, $file_name);
					$file_path = $this->base_url . '/public/storage/cruise_files/' . $file_name;
					$newimage = new File;
					$newimage->fkey = $updated_cruise_id;
					$newimage->src = $file_path;
					$newimage->name = $file_name;
					$newimage->save();
				}
				$first_file = DB::table('files')
					->where('fkey', $updated_cruise_id)
					->first();

			}
			$name = $request->input('name');
			$city = $request->input('city');
			$country = $request->input('country');
			$cat = $request->input('cat');
			$desc = $request->input('desc');
			$about = $request->input('about');
			$day_detail = $request->input('day_detail');

			$exclusion = $request->input('exclusion');
			$inclusion = $request->input('inclusion');

			$duration = $request->input('duration');
			$disc = $request->input('disc');
			$price = $request->input('price');
			$code = $request->input('code');
			// $img                     =$first_image;
			// $banner                  =$first_image;
			$terms = $request->input('terms');
			$payment_policy = $request->input('payment_policy');
			$payment_methods = $request->input('payment_methods');
			$cancellation_policy = $request->input('cancellation_policy');
			$visa_info = $request->input('visa_info');
			$notes = $request->input('notes');
			$questions = $request->input('questions');
			$grpsize = $request->input('grpsize');
			$tourcode = $request->input('tourcode');
			$destinations = $request->input('destinations');
			$startloc = $request->input('startloc');
			$tourstyle = $request->input('tourstyle');
			$tourlanguage = $request->input('tourlanguage');
			$avalibilitydetails = $request->input('avalibilitydetails');
			$tranportdetails = $request->input('tranportdetails');
			$accomodationdetails = $request->input('accomodationdetails');
			$mealdetails = $request->input('mealdetails');
			$guidedetails = $request->input('guidedetails');
			$status = $request->input('status');

			$updated_cruise = DB::table('cruises')
				->where('id', $updated_cruise_id)
				->update([

					'name' => $name,
					'city' => $city,
					// 'country'          =>$country,
					'desc' => $desc,
					'about' => $about,
					'day_detail' => $day_detail,

					'exclusion' => $exclusion,
					'inclusion' => $inclusion,

					'duration' => $duration,
					'disc' => $disc,
					'price' => $price,
					'code' => $code,
					// 'banner'           =>$banner,
					// 'img'              =>$img,

					'terms' => $terms,
					'payment_policy' => $payment_policy,
					'payment_methods' => $payment_methods,
					'cancellation_policy' => $cancellation_policy,
					'visa_info' => $visa_info,
					'notes' => $notes,
					'questions' => $questions,

					'grpsize' => $grpsize,
					'tourcode' => $tourcode,
					'destinations' => $destinations,
					'startloc' => $startloc,
					'tourstyle' => $tourstyle,
					'tourlanguage' => $tourlanguage,
					'avalibilitydetails' => $avalibilitydetails,
					'tranportdetails' => $tranportdetails,
					'accomodationdetails' => $accomodationdetails,
					'mealdetails' => $mealdetails,
					'cancellation_policy' => $cancellation_policy,
					'guidedetails' => $guidedetails,
					'status' => $status,
				]);
			/*new code */
			if (count($icons = $request->input('icons')) > 0) {
				DB::table('package_icons')
					->where('fkey', $updated_cruise_id)
					->delete();
				foreach ($icons as $icon) {
					Package_Icon::create([
						'fkey' => $updated_cruise_id,
						'name' => $icon,
						'of' => "cruise",
					]);
				}
			}
			/*new code */
			if (count($countries = $request->input('country')) > 0) {
				DB::table('countries')
					->where('fkey', $updated_cruise_id)
					->delete();
				foreach ($countries as $country) {
					Country::create([
						'fkey' => $updated_cruise_id,
						'name' => $country,
						'of' => "cruise",
					]);
				}
			}
			$categories = $request->input('cat');
			if (count($categories) > 0) {
				DB::table('categories')
					->where('fkey', $updated_cruise_id)
					->delete();
				foreach ($categories as $category) {
					Category::create([
						'fkey' => $updated_cruise_id,
						'name' => $category,
						'of' => "cruise",
					]);
				}
			}

			$cities = explode(",", $request->input('city'));
			if (count($cities) > 0) {
				DB::table('cities')
					->where('fkey', $updated_cruise_id)
					->delete();
				foreach ($cities as $city) {
					City::create([
						'fkey' => $updated_cruise_id,
						'name' => $city,
						'of' => "cruise",
					]);
				}
				DB::table('cities')
					->where('fkey', $updated_cruise_id)
					->where('name', '')
					->delete();
			}
			if ($request->hasFile('img')) {
				$first_image = DB::table('images')
					->where('fkey', $updated_cruise_id)
					->first();
				DB::table('cruises')
					->where('id', $updated_cruise_id)
					->update([
						'banner' => $first_image->src,
						'img' => $first_image->src,
					]);
			}
			//cleanup
			if ($updated_cruise) {
				return redirect()->route('cruise.view')->with('success', 'Cruise  Updated successfully ');

			} else {
				return redirect()->route('cruise.view')->with('error', 'Operation failed  ');
			}
		}
	}
	public function delete($id) {

		$cruise = DB::table('cruises')
			->where('id', $id)
			->delete();
		$all_images = DB::table('images')
			->where('fkey', $id)
			->get();
		if ($all_images->count() > 0) {
			foreach ($all_images as $img) {
				$db_path = $img->src;
				$len = strlen($this->base_url . "/");
				$new_path = substr($db_path, $len, strlen($db_path) - $len);
				unlink($new_path);
			}
			DB::table('images')
				->where('fkey', $id)
				->delete();
		}
		$all_files = DB::table('files')
			->where('fkey', $id)
			->get();
		if ($all_files->count() > 0) {
			foreach ($all_files as $fil) {
				$db_path = $fil->src;
				$len = strlen($this->base_url . "/");
				$new_path = substr($db_path, $len, strlen($db_path) - $len);
				unlink($new_path);
			}
			DB::table('files')
				->where('fkey', $id)
				->delete();
		}
		/*new code */
		DB::table('package_icons')
			->where('fkey', $id)
			->delete();
		/*new code */
		DB::table('cities')
			->where('fkey', $id)
			->delete();
		DB::table('categories')
			->where('fkey', $id)
			->delete();
		DB::table('countries')
			->where('fkey', $id)
			->delete();
		if ($cruise) {
			return redirect()->route('cruise.view')->with('success', 'Cruise  Deleted successfully ');

		} else {
			return redirect()->route('cruise.view')->with('error', 'Operation failed  ');
		}
	}
	public function category() {
		$package_cat = DB::table('package_cat')
			->where('class', 'cruise')
			->get();
		return view('cruises.category', [
			'package_cat' => $package_cat,
		]);
	}
	public function addcategory() {
		return view('cruises.addcategory');
	}
	public function insertcategory(request $request) {
		DB::table('package_cat')->insert(
			array(
				'class' => 'cruise',
				'name' => $request->input('name'),

			)
		);
		$package_cat = DB::table('package_cat')
			->where('class', 'cruise')
			->get();
		return view('cruises.category', [
			'package_cat' => $package_cat,
		]);
	}
	public function cruises() {
		$cruises = DB::table('cruises')->get();
		return view('cruises.packages')->with('cruises', $cruises);
	}
	public function CruiseDetails($id) {
		$cruise = DB::table('cruises')->where('id', $id)->first();

		$files = DB::table('files')
			->where('fkey', $id)
			->get();
		$images = DB::table('images')
			->where('fkey', $id)
			->get();
		$categories = DB::table('categories')
			->where('fkey', $id)
			->get();
		$countries = DB::table('countries')
			->where('fkey', $id)
			->get();
		$cities = DB::table('cities')
			->where('fkey', $id)
			->get();
		return view('cruises.detail')->with(
			[
				'cruise' => $cruise,
				'files' => $files,
				'images' => $images,
				'categories' => $categories,
				'countries' => $countries,
				'cities' => $cities,
			]);
	}
	public function gridView() {
		$cruises = Cruise::orderBy('id', 'asc')->where('status', '1')->paginate(3);
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();

		// dd($cities);

		return
		view('cruises/grid')->with([
			'cruises' => $cruises,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
		]);
	}
	public function listView() {
		$cruises = Cruise::orderBy('id', 'asc')->where('status', '1')->paginate(3);

		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'cruise')->get();
		/*new code */

		return
		view('cruises/list')->with([
			'cruises' => $cruises,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			/*new code */
			'icons' => $icons,
			/*new code */
		]);
	}

	public function search1($price) {
		$cruises = Cruise::with('geticons')
			->where('price', '>', 2001)
			->paginate(3);
		$icons = Package_Icon::all();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'cruise')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		return
		view('cruises/list')->with([
			'cruises' => $cruises,
			'icons' => $icons,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
		]);
	}
	public function search2($price) {
		$cruises = Cruise::with('geticons')
			->where('price', '>=', 1500)
			->where('price', '<=', 2000)
			->paginate();
		$icons = Package_Icon::all();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'cruise')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		return
		view('cruises/list')->with([
			'cruises' => $cruises,
			'icons' => $icons,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
		]);
	}
	public function search3($price) {
		// $price1=$price+1000;
		$cruises = DB::table('cruises')
			->where('price', '>=', 1000)
			->where('price', '<=', 1500)
			->paginate();
		$icons = Package_Icon::all();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'cruise')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		return
		view('cruises/list')->with([
			'cruises' => $cruises,
			'icons' => $icons,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
		]);
	}
	public function search4($price) {
		// $price1=$price+1000;
		$cruises = DB::table('cruises')
			->where('price', '>=', 1000)
			->where('price', '<=', 1500)
			->paginate();
		$icons = Package_Icon::all();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'cruise')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		return
		view('cruises/list')->with([
			'cruises' => $cruises,
			'icons' => $icons,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
		]);
	}
	public function search5($price) {
		// $price1=$price+1000;
		$cruises = DB::table('cruises')
			->where('price', '>=', 500)
			->where('price', '<=', 1000)
			->paginate();
		$icons = Package_Icon::all();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'cruise')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		return
		view('cruises/list')->with([
			'cruises' => $cruises,
			'icons' => $icons,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			'success' => "Search results ",
		]);
	}
	public function searchByCity($city) {
		$cruises = DB::table('cruises')
			->join('cities', 'cities.fkey', '=', 'cruises.id')
			->where('cities.name', $city)
			->select('cruises.*')
			->paginate(3);
		$icons = Package_Icon::all();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'cruise')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		return view('/cruises/list')->with([
			'cruises' => $cruises,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			'icons' => $icons,
			'success' => 'Results For City  -' . $city]);
	}
	public function searchByCountry($country) {
		$cruises = DB::table('cruises')
			->join('countries', 'countries.fkey', '=', 'cruises.id')
			->where('countries.name', $country)
			->select('cruises.*')
			->paginate(3);
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'cruise')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'cruise')->get();
		/*new code */
		//  dd($cruises);
		return
		view('cruises/list')->with([
			'cruises' => $cruises,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			/*new code */
			'icons' => $icons,
			/*new code */
		]);
	}
	public function searchByCategory($category) {
		$cruises = DB::table('cruises')
			->join('categories', 'categories.fkey', '=', 'cruises.id')
			->where('categories.name', $category)
			->select('cruises.*')
			->paginate(3);
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'cruise')->distinct()->limit('5')->get();

		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();

		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'cruise')->get();
		/*new code */
		//  dd($cruises);
		return
		view('cruises/list')->with([
			'cruises' => $cruises,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			/*new code */
			'icons' => $icons,
			/*new code */
		]);
	}
	//implementing search functions of grid view
	public function grid_search1($price) {
		$cruises = DB::table('cruises')
			->where('price', '>', 2001)
			->paginate();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'cruise')->distinct()->limit('5')->get();

		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();

		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'cruise')->get();
		/*new code */
		//  dd($cruises);
		return
		view('cruises/list')->with([
			'cruises' => $cruises,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			/*new code */
			'icons' => $icons,
			/*new code */
		]);
	}
	public function grid_search2($price) {
		$price1 = $price + 1000;
		$cruises = DB::table('cruises')
			->where('price', '>=', 1500)
			->where('price', '<=', 2000)
			->paginate();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'cruise')->distinct()->limit('5')->get();

		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();

		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'cruise')->get();
		/*new code */
		//  dd($cruises);
		return
		view('cruises/list')->with([
			'cruises' => $cruises,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			/*new code */
			'icons' => $icons,
			/*new code */
		]);
	}
	public function grid_search3($price) {
		// $price1=$price+1000;
		$cruises = DB::table('cruises')
			->where('price', '>=', 1000)
			->where('price', '<=', 1500)
			->paginate();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'cruise')->distinct()->limit('5')->get();

		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();

		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'cruise')->get();
		/*new code */
		//  dd($cruises);
		return
		view('cruises/list')->with([
			'cruises' => $cruises,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			/*new code */
			'icons' => $icons,
			/*new code */
		]);
	}
	public function grid_search4($price) {
		// $price1=$price+1000;
		$cruises = DB::table('cruises')
			->where('price', '>=', 500)
			->where('price', '<=', 1000)
			->paginate();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'cruise')->distinct()->limit('5')->get();

		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();

		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'cruise')->get();
		/*new code */
		//  dd($cruises);
		return
		view('cruises/list')->with([
			'cruises' => $cruises,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			/*new code */
			'icons' => $icons,
			/*new code */
		]);
	}
	public function grid_search5($price) {
		$cruises = DB::table('cruises')
			->where('price', '<', $price)
			->paginate();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'cruise')->distinct()->limit('5')->get();

		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();

		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'cruise')->get();
		/*new code */
		//  dd($cruises);
		return
		view('cruises/list')->with([
			'cruises' => $cruises,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			/*new code */
			'icons' => $icons,
			/*new code */
		]);
	}
	public function grid_searchByCity($city) {
		$cruises = DB::table('cruises')
			->join('cities', 'cities.fkey', '=', 'cruises.id')
			->where('cities.name', $city)
			->select('cruises.*')
			->paginate(3);
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'cruise')->distinct()->limit('5')->get();

		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();

		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'cruise')->get();
		/*new code */
		//  dd($cruises);
		return
		view('cruises/list')->with([
			'cruises' => $cruises,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			/*new code */
			'icons' => $icons,
			/*new code */
		]);
	}
	public function grid_searchByCategory($category) {
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'cruise')->distinct()->limit('5')->get();

		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();

		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'cruise')->get();
		/*new code */
		//  dd($cruises);
		return
		view('cruises/list')->with([
			'cruises' => $cruises,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			/*new code */
			'icons' => $icons,
			/*new code */
		]);
	}
	public function grid_searchByCountry($country) {
		$cruises = DB::table('cruises')
			->join('countries', 'countries.fkey', '=', 'cruises.id')
			->where('countries.name', $country)
			->select('cruises.*')
			->paginate(3);
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'cruise')->distinct()->limit('5')->get();

		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();

		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'cruise')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'cruise')->get();
		/*new code */
		//  dd($cruises);
		return
		view('cruises/list')->with([
			'cruises' => $cruises,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			/*new code */
			'icons' => $icons,
			/*new code */
		]);
	}
	public function returnpdf() {
		return view('cruises.pdf');
	}
	public function PDF($id) {
		$cruise = DB::table('cruises')
			->where('id', $id)
			->first();
		$pdf = PDF::loadView('cruises/pdf', compact('cruise'));
		$pdf->setOptions(['isPhpEnabled' => true, 'isRemoteEnabled' => true]);
		return $pdf->download('weblinerz.pdf');
	}
	public function deletefile() {
		echo "deletefile";
	}
	public function deletecategory($id) {
		DB::table('package_cat')
			->where('id', $id)
			->delete();
		$package_cat = DB::table('package_cat')->where('class', 'cruise')->get();
		return view('cruises.category', [
			'package_cat' => $package_cat,
		]);
	}
}