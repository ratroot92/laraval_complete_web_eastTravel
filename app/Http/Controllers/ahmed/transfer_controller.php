<?php
namespace App\Http\Controllers\ahmed;
use App;
use App\Category;
use App\City;
use App\Country;
use App\File;
use App\Http\Controllers\Controller;
use App\Image;
use App\Package_Icon;
use App\Transfer;
use DB;
use Illuminate\Http\Request;
use PDF;
use Validator;

class transfer_controller extends Controller {
	private $base_url;

	public function __construct() {

		$this->base_url = url('/');

	}
	public function view() {
		$transfers = Transfer::with('getcity')->get();
		return view('transfers/index', [
			'transfers' => $transfers,
		]);
	}
	public function add() {
		$all_categories = DB::table('package_cat')
			->where('class', 'transfer')
			->get();
		$icons = DB::table('icons')->get();
		$country_list = DB::table('country_list')
			->get();
		return view('transfers/add', [
			'packagecat' => $all_categories,
			'icons' => $icons,
			'country_list' => $country_list,
		]);
	}
	//     public function cityByCountry($country){
	//    $country_selected                                             = DB::table('country_list')
	//                      ->where('name',$country)
	//                      ->first();
	//   $city_list                                                     = DB::table('city_list')
	//                      ->join('states', 'states.id', '             =', 'city_list.state_id')
	//                      ->join('country_list', 'country_list.id', ' =', 'states.country_id')
	//                      ->where('country_list.id', '                =', $country_selected->id)
	//                      ->select('city_list.name')
	//                      ->get();
	// $html                                                            = view('transfers/city',compact('city_list'))->render();
	// return                 response()->json([$html]);
	//     }
	public function insert(Request $request) {
		$validator = Validator::make($request->all(), [
			// 'name'                                                           =>'required',
			// 'city'                                                           =>'required',
			// 'country'                                                        =>'required',
			// 'cat'                                                            =>'required',
			// 'desc'                                                           =>'required',
			// 'file'                                                           =>'required',
			// 'img'                                                            =>'required',
			// 'about'                                                          =>'required',
			// 'day_detail'                                                     =>'required',
			// 'duration'                                                       =>'required',
			// 'disc'                                                           =>'required',
			// 'date'                                                           =>'required',
			// 'price'                                                          =>'required',
			// 'code'                                                           =>'required',
		]);
		if ($validator->fails()) {
			return redirect('/transfer/add')
				->withErrors($validator)
				->withInput();
		} else {
			$input = $request->all();
			$first_file = '';
			$first_img = '';
			$last_transfer_id = 0;
			$last_transfer = Transfer::orderBy('created_at', 'desc')->first();
			if ($last_transfer != null) {
				$last_transfer_id = $last_transfer->id + 1;
			} else {
				$last_transfer_id = 30001;
			}
			if ($request->hasFile('img')) {
				$images = $request->file('img');
				foreach ($images as $img) {
					$extension = $img->getClientOriginalExtension();
					$image_name = time() . rand(1000, 9999) . "_." . $extension;
					$path = public_path('/storage/transfers_images/');
					$img->move($path, $image_name);
					$img_path = $this->base_url . '/public/storage/transfers_images/' . $image_name;
					$newimage = new Image;
					$newimage->fkey = $last_transfer_id;
					$newimage->src = $img_path;
					$newimage->name = $image_name;
					$newimage->save();
				}
				$first_img = DB::table('images')
					->where('fkey', $last_transfer_id)
					->first();
			}
			if ($request->hasFile('file')) {
				$files = $request->file('file');
				if (count($files) > 0) {
					foreach ($files as $file) {
						$extension = $file->getClientOriginalExtension();
						$file_name = time() . rand(1000, 9999) . "_." . $extension;
						$path = public_path('/storage/transfers_files/');
						$file->move($path, $file_name);
						$file_path = $this->base_url . '/public/storage/transfers_files/' . $file_name;
						$newimage = new File;
						$newimage->fkey = $last_transfer_id;
						$newimage->src = $file_path;
						$newimage->name = $file_name;
						$newimage->save();
					}
				}
				// $first_file                                                      =DB::table('files')
				// ->where('fkey',$last_activity_id)
				// ->first();
			}
			$new_transfer = new Transfer;
			$new_transfer->id = $last_transfer_id;
			$new_transfer->name = $request->input('name');
			//$new_transfer->city                                               =$request->input('city');
			//$new_transfer->country                                            =$country;
			/*  $new_transfer->cat                                              =$request->input('cat');*/
			$new_transfer->desc = $request->input('desc');
			if ($first_img) {
				$new_transfer->banner = $first_img->src;
				$new_transfer->img = $first_img->src;
			}
			$new_transfer->about = $request->input('about');
			$new_transfer->day_detail = $request->input('day_detail');
			$new_transfer->duration = $request->input('duration');
			$new_transfer->disc = $request->input('disc');
			$new_transfer->price = $request->input('price');
			$new_transfer->code = $request->input('code');
			$new_transfer->terms = $request->input('terms');
			$new_transfer->payment_policy = $request->input('payment_policy');
			$new_transfer->payment_methods = $request->input('payment_methods');
			$new_transfer->cancellation_policy = $request->input('cancellation_policy');
			$new_transfer->visa_info = $request->input('visa_info');
			$new_transfer->notes = $request->input('notes');
			$new_transfer->questions = $request->input('questions');
			$new_transfer->grpsize = $request->input('grpsize');
			$new_transfer->tourcode = $request->input('tourcode');
			$new_transfer->destinations = $request->input('destinations');
			$new_transfer->startloc = $request->input('startloc');
			$new_transfer->tourstyle = $request->input('tourstyle');
			$new_transfer->tourlanguage = $request->input('tourlanguage');
			$new_transfer->avalibilitydetails = $request->input('avalibilitydetails');
			$new_transfer->tranportdetails = $request->input('tranportdetails');
			$new_transfer->accomodationdetails = $request->input('accomodationdetails');
			$new_transfer->mealdetails = $request->input('mealdetails');
			$new_transfer->guidedetails = $request->input('guidedetails');
			$new_transfer->status = $request->input('status');
			$new_transfer->save();
			if ($new_transfer) {
				/*new code */
				$icons = $request->input('icons');
				if (count($icons) > 0) {
					foreach ($icons as $icon) {
						Package_Icon::create([
							'fkey' => $last_transfer_id,
							'name' => $icon,
							'of' => "transfer",
						]);
					}
				}
				/*new code */
				$countries = $request->input('country');
				if (count($countries) > 0) {
					foreach ($countries as $country) {
						Country::create([
							'fkey' => $last_transfer_id,
							'name' => $country,
							'of' => "transfer",
						]);
					}
				}
				$categories = $request->input('cat');
				if (count($categories) > 0) {
					foreach ($categories as $category) {
						Category::create([
							'fkey' => $last_transfer_id,
							'name' => $category,
							'of' => "transfer",
						]);
					}
				}
				$cities = explode(",", $request->input('city'));
				if (count($cities) > 0) {
					foreach ($cities as $city) {
						City::create([
							'fkey' => $last_transfer_id,
							'name' => $city,
							'of' => "transfer",
						]);
					}
					DB::table('cities')
						->where('fkey', $last_transfer_id)
						->where('name', '')
						->delete();
				}
				return redirect()->route('transfer.add')->with('success', 'Transfer  added successfully ');
			} else {
				return redirect()->route('transfer.add')->with('error', 'Operation failed  ');
			}
		}
	}
	public function update($id) {
		$item_city[] = [];
		$item_category[] = [];
		$item_icon[] = [];
		$transfer = DB::table('transfers')
			->where('id', $id)
			->first();
		$citynames = DB::table('cities')
			->select('name')
			->where('fkey', $transfer->id)
			->get();
		$packagecat = DB::table('package_cat')
			->where('class', 'transfer')
			->get()
			->toArray();
		/*new code */
		$all_icons = DB::table('icons')
			->get()
			->toArray();
		$icons = DB::table('package_icons')
			->where('fkey', $id)
			->where('of', 'transfer')
			->get()
			->toArray();
		foreach ($icons as $item) {
			$item_icon[] = $item->name;
		}
		/*new code */
		$selected1 = DB::table('categories')
			->where('fkey', $id)
			->where('of', "transfer")
			->get()
			->toArray();
		foreach ($selected1 as $item) {
			$item_category[] = $item->name;
		}
		$selected = DB::table('countries')
			->where('fkey', $id)
			->where('of', "transfer")
			->get()
			->toArray();
		foreach ($selected as $item) {
			$item_city[] = $item->name;
		}
		$country_list = DB::table('country_list')
			->get()
			->toArray();
		if ($transfer) {
			return view('transfers/update')->with([
				'transfer' => $transfer,
				'packagecat' => $packagecat,
				'country_list' => $country_list,
				'item_city' => $item_city,
				'item_category' => $item_category,
				'citynames' => $citynames,
				/*new code */
				'item_icon' => $item_icon,
				'all_icons' => $all_icons,
				/*new code */
			]);
		} else {
			return redirect()->route('transfer.view')->with('error', 'Operation failed  ');
		}
	}
	public function edit(Request $request) {
		$validator = Validator::make($request->all(), [
			// 'name'                                                           =>'required',
			// 'city'                                                           =>'required',
			// 'country'                                                        =>'required',
			// 'cat'                                                            =>'required',
			// 'desc'                                                           =>'required',
			// 'file'                                                           =>'required',
			// 'img'                                                            =>'required',
			// 'about'                                                          =>'required',
			// 'day_detail'                                                     =>'required',
			// 'duration'                                                       =>'required',
			// 'disc'                                                           =>'required',
			// 'date'                                                           =>'required',
			// 'price'                                                          =>'required',
			// 'code'                                                           =>'required',
		]);
		if ($validator->fails()) {
			return redirect('/transfer/update')
				->withErrors($validator)
				->withInput();
		} else {
			$first_image = '';
			$first_file = '';
			$input = $request->all();
			$updated_transfer_id = $request->input('id');
			if ($request->hasFile('img')) {
				$all_img = DB::table('images')
					->where('fkey', $updated_transfer_id)
					->get();
				foreach ($all_img as $fil) {
					$db_path = $fil->src;
					$len = strlen($this->base_url . "/");
					$new_path = substr($db_path, $len, strlen($db_path) - $len);
					unlink($new_path);
				}
				$all_img = DB::table('images')
					->where('fkey', $updated_transfer_id)
					->delete();
				$images = $request->file('img');
				foreach ($images as $img) {
					$extension = $img->getClientOriginalExtension();
					$image_name = time() . rand(1000, 9999) . "_." . $extension;
					$path = public_path('/storage/transfers_images/');
					$img->move($path, $image_name);
					$img_path = $this->base_url . '/public/storage/transfers_images/' . $image_name;
					$newimage = new Image;
					$newimage->fkey = $updated_transfer_id;
					$newimage->src = $img_path;
					$newimage->name = $image_name;
					$newimage->save();
				}
			}
			if ($request->hasFile('file')) {
				$all_files = DB::table('files')
					->where('fkey', $updated_transfer_id)
					->get();
				foreach ($all_files as $fil) {
					$db_path = $fil->src;
					$len = strlen($this->base_url . "/");
					$new_path = substr($db_path, $len, strlen($db_path) - $len);
					unlink($new_path);
				}
				$all_files = DB::table('files')
					->where('fkey', $updated_transfer_id)
					->delete();
				$files = $request->file('file');
				foreach ($files as $file) {
					$extension = $file->getClientOriginalExtension();
					$file_name = time() . rand(1000, 9999) . "_." . $extension;
					$path = public_path('/storage/transfers_files/');
					$file->move($path, $file_name);
					$file_path = $this->base_url . '/public/storage/transfers_files/' . $file_name;
					$newimage = new File;
					$newimage->fkey = $updated_transfer_id;
					$newimage->src = $file_path;
					$newimage->name = $file_name;
					$newimage->save();
				}
				$first_file = DB::table('files')
					->where('fkey', $updated_transfer_id)
					->first();
			}
			$name = $request->input('name');
			$city = $request->input('city');
			$country = $request->input('country');
			$cat = $request->input('cat');
			$desc = $request->input('desc');
			$about = $request->input('about');
			$day_detail = $request->input('day_detail');
			$duration = $request->input('duration');
			$disc = $request->input('disc');
			$price = $request->input('price');
			$code = $request->input('code');
			// $img                                                             =$first_image;
			// $banner                                                          =$first_image;
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
			$updated_trasnfer = DB::table('transfers')
				->where('id', $updated_transfer_id)
				->update([
					'name' => $name,
					// 'city'                                                           =>$city,
					// 'country'                                                        =>$country,
					'desc' => $desc,
					'about' => $about,
					'day_detail' => $day_detail,
					'duration' => $duration,
					'disc' => $disc,
					'price' => $price,
					'code' => $code,
					// 'banner'                                                         =>$banner,
					// 'img'                                                            =>$img,
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
			if (count($countries = $request->input('country')) > 0) {
				DB::table('countries')
					->where('fkey', $updated_transfer_id)
					->delete();
				foreach ($countries as $country) {
					Country::create([
						'fkey' => $updated_transfer_id,
						'name' => $country,
						'of' => "transfer",
					]);
				}
			}
			/*new code */
			if (count($icons = $request->input('icons')) > 0) {
				DB::table('package_icons')
					->where('fkey', $updated_transfer_id)
					->delete();
				foreach ($icons as $icon) {
					Package_Icon::create([
						'fkey' => $updated_transfer_id,
						'name' => $icon,
						'of' => "transfer",
					]);
				}
			}
			/*new code */
			$categories = $request->input('cat');
			if (count($categories) > 0) {
				DB::table('categories')
					->where('fkey', $updated_transfer_id)
					->delete();
				foreach ($categories as $category) {
					Category::create([
						'fkey' => $updated_transfer_id,
						'name' => $category,
						'of' => "transfer",
					]);
				}
			}
			$cities = explode(",", $request->input('city'));
			if (count($cities) > 0) {
				DB::table('cities')
					->where('fkey', $updated_transfer_id)
					->delete();
				foreach ($cities as $city) {
					City::create([
						'fkey' => $updated_transfer_id,
						'name' => $city,
						'of' => "transfer",
					]);
				}
				DB::table('cities')
					->where('fkey', $updated_transfer_id)
					->where('name', '')
					->delete();
			}
			if ($request->hasFile('img')) {
				$first_image = DB::table('images')
					->where('fkey', $updated_transfer_id)
					->first();
				DB::table('transfers_files')
					->where('id', $updated_transfer_id)
					->update([
						'banner' => $first_image->src,
						'img' => $first_image->src,
					]);
			}
			//cleanup
			if ($updated_trasnfer) {
				return redirect()->route('transfer.view')->with('success', 'Transfer  Updated successfully ');
			} else {
				return redirect()->route('transfer.view')->with('error', 'Operation failed  ');
			}
		}
	}
	public function delete($id) {
		$transfer = DB::table('transfers')
			->where('id', $id)
			->delete();
		/*new code */
		DB::table('package_icons')
			->where('fkey', $id)
			->delete();
		/*new code */
		DB::table('images')
			->where('id', $id)
			->delete();
		DB::table('files')
			->where('id', $id)
			->delete();
		DB::table('cities')
			->where('id', $id)
			->delete();
		DB::table('categories')
			->where('id', $id)
			->delete();
		DB::table('countries')
			->where('id', $id)
			->delete();
		if ($transfer) {
			return redirect()->route('transfer.view')->with('success', 'Transfer  Deleted successfully ');
		} else {
			return redirect()->route('transfer.view')->with('error', 'Operation failed  ');
		}
	}
	public function category() {
		$package_cat = DB::table('package_cat')
			->where('class', 'transfer')
			->get();
		return view('transfers.category', [
			'package_cat' => $package_cat,
		]);
	}
	public function addcategory() {
		return view('transfers.addcategory');
	}
	public function insertcategory(request $request) {
		DB::table('package_cat')->insert(
			array(
				'class' => 'transfer',
				'name' => $request->input('name'),
			)
		);
		$package_cat = DB::table('package_cat')
			->where('class', 'transfer')
			->get();
		return view('transfers.category', [
			'package_cat' => $package_cat,
		]);
	}
	public function transfers() {
		$transfers = DB::table('transfers')->get();
		return view('transfers.packages')->with('transfers', $transfers);
	}
	public function TransferDetails($id) {
		$transfer = DB::table('transfers')
			->where('id', $id)
			->first();
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
		return view('transfers.detail')->with(
			[
				'transfer' => $transfer,
				'files' => $files,
				'images' => $images,
				'categories' => $categories,
				'countries' => $countries,
				'cities' => $cities,
			]);
	}
	public function gridView() {
		$transfers = Transfer::orderBy('id', 'asc')->where('status', '1')->paginate(3);
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'transfer')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		// dd($cities);
		return
		view('transfers/grid')->with([
			'transfers' => $transfers,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
		]);
	}
	public function listView() {
		$transfers = Transfer::orderBy('id', 'asc')->where('status', '1')->paginate(3);
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'transfer')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'transfer')->get();
		/*new code */
		return
		view('transfers/list')->with([
			'transfers' => $transfers,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			/*new code */
			'icons' => $icons,
			/*new code */
		]);
	}
	public function search1($price) {
		$transfers = Transfer::with('geticons')
			->where('price', '>', '250')
			->paginate(3);
		$icons = Package_Icon::all();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'transfer')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		return
		view('transfers/list')->with([
			'transfers' => $transfers,
			'icons' => $icons,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
		]);
	}
	public function search2($price) {
		$price1 = $price + 0;
		$transfers = Transfer::with('geticons')
			->where('price', '                                                   >=', '100')
			->where('price', '                                                   <=', '250')
			->paginate();
		$icons = Package_Icon::all();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'transfer')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		return
		view('transfers/list')->with([
			'transfers' => $transfers,
			'icons' => $icons,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
		]);
	}
	public function search3($price) {
		// $price1                                                          =$price+1000;
		$transfers = DB::table('transfers')
			->where('price', '                                                   >=', '50')
			->where('price', '                                                   <=', '100')
			->paginate();
		$icons = Package_Icon::all();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'transfer')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		return
		view('transfers/list')->with([
			'transfers' => $transfers,
			'icons' => $icons,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
		]);
	}
	public function search4($price) {
		// $price1                                                          =$price+1000;
		$transfers = DB::table('transfers')
			->where('price', '                                                   >=', '25')
			->where('price', '                                                   <=', '50')
			->paginate();
		$icons = Package_Icon::all();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'transfer')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		return
		view('transfers/list')->with([
			'transfers' => $transfers,
			'icons' => $icons,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
		]);
	}
	public function search5($price) {
		// $price1                                                          =$price+1000;
		$transfers = DB::table('transfers')
			->where('price', '                                                   >=', '0')
			->where('price', '                                                   <=', '25')
			->paginate();
		$icons = Package_Icon::all();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'transfer')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		return
		view('transfers/list')->with([
			'transfers' => $transfers,
			'icons' => $icons,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			'success' => "Search results ",
		]);
	}
	public function searchByCity($city) {
		$transfers = DB::table('transfers')
			->join('cities', 'cities.fkey', '                                   =', 'transfers.id')
			->where('cities.name', $city)
			->select('transfers.*')
			->paginate(3);
		$icons = Package_Icon::all();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'transfer')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		return view('/transfers/list')->with([
			'transfers' => $transfers,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			'icons' => $icons,
			'success' => 'Results For City  -' . $city]);
	}
	public function searchByCountry($country) {
		$transfers = DB::table('transfers')
			->join('countries', 'countries.fkey', '                             =', 'transfers.id')
			->where('countries.name', $country)
			->select('transfers.*')
			->paginate(3);
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'transfer')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'transfer')->get();
		/*new code */
		//  dd($transfers);
		return
		view('transfers/list')->with([
			'transfers' => $transfers,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			/*new code */
			'icons' => $icons,
			/*new code */
		]);
	}
	public function searchByCategory($category) {
		$transfers = DB::table('transfers')
			->join('categories', 'categories.fkey', '                           =', 'transfers.id')
			->where('categories.name', $category)
			->select('transfers.*')
			->paginate(3);
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'transfer')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'transfer')->get();
		/*new code */
		//  dd($transfers);
		return
		view('transfers/list')->with([
			'transfers' => $transfers,
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
		$transfers = DB::table('transfers')
			->where('price', '>', '250')
			->paginate();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'transfer')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'transfer')->get();
		/*new code */
		//  dd($transfers);
		return
		view('transfers/list')->with([
			'transfers' => $transfers,
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
		$transfers = DB::table('transfers')
			->where('price', '                                                   >=', '100')
			->where('price', '                                                   <=', '250')
			->paginate();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'transfer')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'transfer')->get();
		/*new code */
		//  dd($transfers);
		return
		view('transfers/list')->with([
			'transfers' => $transfers,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			/*new code */
			'icons' => $icons,
			/*new code */
		]);
	}
	public function grid_search3($price) {
		// $price1                                                          =$price+1000;
		$transfers = DB::table('transfers')
			->where('price', '                                                   >=', '50')
			->where('price', '                                                   <=', '100')
			->paginate();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'transfer')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'transfer')->get();
		/*new code */
		//  dd($transfers);
		return
		view('transfers/list')->with([
			'transfers' => $transfers,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			/*new code */
			'icons' => $icons,
			/*new code */
		]);
	}
	public function grid_search4($price) {
		// $price1                                                          =$price+1000;
		$transfers = DB::table('transfers')
			->where('price', '                                                   >=', '25')
			->where('price', '                                                   <=', '50')
			->paginate();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'transfer')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'transfer')->get();
		/*new code */
		//  dd($transfers);
		return
		view('transfers/list')->with([
			'transfers' => $transfers,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			/*new code */
			'icons' => $icons,
			/*new code */
		]);
	}
	public function grid_search5($price) {
		$transfers = DB::table('transfers')
			->where('price', '<', $price)
			->paginate();
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'transfer')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'transfer')->get();
		/*new code */
		//  dd($transfers);
		return
		view('transfers/list')->with([
			'transfers' => $transfers,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			/*new code */
			'icons' => $icons,
			/*new code */
		]);
	}
	public function grid_searchByCity($city) {
		$transfers = DB::table('transfers')
			->join('cities', 'cities.fkey', '                                   =', 'transfers.id')
			->where('cities.name', $city)
			->select('transfers.*')
			->paginate(3);
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'transfer')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'transfer')->get();
		/*new code */
		//  dd($transfers);
		return
		view('transfers/list')->with([
			'transfers' => $transfers,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			/*new code */
			'icons' => $icons,
			/*new code */
		]);
	}
	public function grid_searchByCategory($category) {
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'transfer')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'transfer')->get();
		/*new code */
		//  dd($transfers);
		return
		view('transfers/list')->with([
			'transfers' => $transfers,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			/*new code */
			'icons' => $icons,
			/*new code */
		]);
	}
	public function grid_searchByCountry($country) {
		$transfers = DB::table('transfers')
			->join('countries', 'countries.fkey', '                             =', 'transfers.id')
			->where('countries.name', $country)
			->select('transfers.*')
			->paginate(3);
		$cities = DB::table('cities')->select('name')->distinct()->where('of', 'transfer')->distinct()->limit('5')->get();
		$countries = DB::table('countries')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		$categories = DB::table('categories')->select('name')->distinct()->where('of', 'transfer')->limit('5')->get();
		/*new code */
		$icons = DB::table('package_icons')->where('of', 'transfer')->get();
		/*new code */
		//  dd($transfers);
		return
		view('transfers/list')->with([
			'transfers' => $transfers,
			'cities' => $cities,
			'countries' => $countries,
			'categories' => $categories,
			/*new code */
			'icons' => $icons,
			/*new code */
		]);
	}
	public function returnpdf() {
		return view('transfers.pdf');
	}

	public function PDF($id) {
		$transfer = DB::table('transfers')->where('id', $id)->first();
		$pdf = PDF::loadView('transfers/pdf', compact('transfer'));
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
		$package_cat = DB::table('package_cat')->where('class', 'transfer')->get();
		return view('transfers.category', [
			'package_cat' => $package_cat,
		]);
	}
}