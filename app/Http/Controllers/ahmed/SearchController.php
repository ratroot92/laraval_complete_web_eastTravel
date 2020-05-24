<?php

namespace App\Http\Controllers\ahmed;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Response;
use App\Activity;
use App\Daytour;
use App\Package;
use App\Transfer;
use App\Cruise;
use App\Package_Icon;
	use Illuminate\Contracts\Support\Jsonable;
class SearchController extends Controller
{
    public function  search_results(Request $request){



$Poland              =DB::table('popularcities')->where('country', 'Poland')->limit('5')->get();
$Poland_cities       = (array) $Poland;
$CzechRepublic       =DB::table('popularcities')->where('country', 'Czech Republic')->limit('5')->get();
$CzechRepubliccities = (array) $CzechRepublic;
$Slovakia            =DB::table('popularcities')->where('country', 'Slovakia')->limit('5')->get();
$Slovakia_cities     = (array) $Slovakia ;
$Austria             =DB::table('popularcities')->where('country', 'Austria')->limit('5')->get();
$Austria_cities      = (array) $Austria ;
$Germany             =DB::table('popularcities')->where('country', 'Germany ')->limit('5')->get();
$Germany_cities      = (array) $Germany  ;
$France              =DB::table('popularcities')->where('country', 'France')->limit('5')->get();
$France_cities       = (array) $France  ;
$Switzerland         =DB::table('popularcities')->where('country', 'Switzerland')->limit('5')->get();
$Switzerland_cities  = (array) $Switzerland  ;
$Italy               =DB::table('popularcities')->where('country', 'Italy')->limit('5')->get();
$Italy_cities        = (array) $Italy  ;
$Slovenia            =DB::table('popularcities')->where('country', 'Slovenia')->limit('5')->get();
$Slovenia_cities     = (array) $Slovenia  ;
$Hungary             =DB::table('popularcities')->where('country', 'Hungary')->limit('5')->get();
$Hungary_cities      = (array) $Hungary  ;
$Croatia             =DB::table('popularcities')->where('country', 'Croatia')->limit('5')->get();
$Croatia_cities      = (array) $Croatia  ;

        




    	//if value=1   => packages
    	//if value=2   => daytours
    	//if value=3   => activities
    	//if value=4   => cruises
    	//if value=5   => treansfers
    	$packages;
    	$tags=$request->input('myCountry');
    	$options=$request->input('options');
    	if($options=='1'){ 		  
 $packages  =Package::with('geticons')->where('city','LIKE','%'.$tags.'%')->orWhere('country','LIKE','%'.$tags.'%')->orWhere('name','LIKE','%'.$tags.'%')->paginate(10);
		        $icons=Package_Icon::all();
		        $cities     = DB::table('cities')->select('name')->distinct()->where('of','package')->limit('5')->get();
		        $countries  = DB::table('countries')->select('name')->distinct()->where('of','package')->limit('5')->get();
		        $categories  = DB::table('categories')->select('name')->distinct()->where('of','package')->limit('5')->get();
	return
	view('website/search-result')->with([
		'packages'   =>$packages,
		'icons'        =>$icons,
		'cities'       =>$cities,
		'countries'    =>$countries,
		'categories'   =>$categories,
'Poland_cities'=>$Poland_cities,
'CzechRepubliccities'=>$CzechRepubliccities,
'Slovakia_cities'=>$Slovakia_cities,
'Italy_cities'=>$Italy_cities,
'Austria_cities'=>$Austria_cities,
'France_cities'=>$France_cities,
'Germany_cities'=>$Germany_cities,
'Switzerland_cities'=>$Switzerland_cities,
'Slovenia_cities'=>$Slovenia_cities,
'Hungary_cities'=>$Hungary_cities,
'Croatia_cities'=>$Croatia_cities,

	]);

    	}

    	if($options=='2'){
             $packages  =Daytour::with('geticons')->where('city','LIKE','%'.$tags.'%')->orWhere('country','LIKE','%'.$tags.'%')->orWhere('name','LIKE','%'.$tags.'%')->paginate(10);
		        $icons=Package_Icon::all();
		        $cities     = DB::table('cities')->select('name')->distinct()->where('of','daytour')->limit('5')->get();
		        $countries  = DB::table('countries')->select('name')->distinct()->where('of','daytour')->limit('5')->get();
		        $categories  = DB::table('categories')->select('name')->distinct()->where('of','daytour')->limit('5')->get();
	return
	view('website/search-result')->with([
		'packages'   =>$packages,
		'icons'        =>$icons,
		'cities'       =>$cities,
		'countries'    =>$countries,
		'categories'   =>$categories,
        'Poland_cities'=>$Poland_cities,
'CzechRepubliccities'=>$CzechRepubliccities,
'Slovakia_cities'=>$Slovakia_cities,
'Italy_cities'=>$Italy_cities,
'Austria_cities'=>$Austria_cities,
'France_cities'=>$France_cities,
'Germany_cities'=>$Germany_cities,
'Switzerland_cities'=>$Switzerland_cities,
'Slovenia_cities'=>$Slovenia_cities,
'Hungary_cities'=>$Hungary_cities,
'Croatia_cities'=>$Croatia_cities,

	]);
    	}


    	if($options=='3'){
    		  $packages  =Activity::with('geticons')->where('city','LIKE','%'.$tags.'%')->orWhere('country','LIKE','%'.$tags.'%')->orWhere('name','LIKE','%'.$tags.'%')->paginate(10);
		        $icons=Package_Icon::all();
		        $cities     = DB::table('cities')->select('name')->distinct()->where('of','activity')->limit('5')->get();
		        $countries  = DB::table('countries')->select('name')->distinct()->where('of','activity')->limit('5')->get();
		        $categories  = DB::table('categories')->select('name')->distinct()->where('of','activity')->limit('5')->get();
	return
	view('website/search-result')->with([
		'packages'   =>$packages,
		'icons'        =>$icons,
		'cities'       =>$cities,
		'countries'    =>$countries,
		'categories'   =>$categories,
        'Poland_cities'=>$Poland_cities,
'CzechRepubliccities'=>$CzechRepubliccities,
'Slovakia_cities'=>$Slovakia_cities,
'Italy_cities'=>$Italy_cities,
'Austria_cities'=>$Austria_cities,
'France_cities'=>$France_cities,
'Germany_cities'=>$Germany_cities,
'Switzerland_cities'=>$Switzerland_cities,
'Slovenia_cities'=>$Slovenia_cities,
'Hungary_cities'=>$Hungary_cities,
'Croatia_cities'=>$Croatia_cities,

	]);
    	}


    	if($options=='4'){
    		$packages  =Cruise::with('geticons')->where('city','LIKE','%'.$tags.'%')->orWhere('country','LIKE','%'.$tags.'%')->orWhere('name','LIKE','%'.$tags.'%')->paginate(10);
		        $icons=Package_Icon::all();
		        $cities     = DB::table('cities')->select('name')->distinct()->where('of','cruise')->limit('5')->get();
		        $countries  = DB::table('countries')->select('name')->distinct()->where('of','cruise')->limit('5')->get();
		        $categories  = DB::table('categories')->select('name')->distinct()->where('of','cruise')->limit('5')->get();
	return
	view('website/search-result')->with([
		'packages'   =>$packages,
		'icons'        =>$icons,
		'cities'       =>$cities,
		'countries'    =>$countries,
		'categories'   =>$categories,
        'Poland_cities'=>$Poland_cities,
'CzechRepubliccities'=>$CzechRepubliccities,
'Slovakia_cities'=>$Slovakia_cities,
'Italy_cities'=>$Italy_cities,
'Austria_cities'=>$Austria_cities,
'France_cities'=>$France_cities,
'Germany_cities'=>$Germany_cities,
'Switzerland_cities'=>$Switzerland_cities,
'Slovenia_cities'=>$Slovenia_cities,
'Hungary_cities'=>$Hungary_cities,
'Croatia_cities'=>$Croatia_cities,

	]);
    	}

    	if($options=='5'){
    		$packages  =Transfer::with('geticons')->where('city','LIKE','%'.$tags.'%')->orWhere('country','LIKE','%'.$tags.'%')->orWhere('name','LIKE','%'.$tags.'%')->paginate(10);
		        $icons=Package_Icon::all();
		        $cities     = DB::table('cities')->select('name')->distinct()->where('of','transfer')->limit('5')->get();
		        $countries  = DB::table('countries')->select('name')->distinct()->where('of','transfer')->limit('5')->get();
		        $categories  = DB::table('categories')->select('name')->distinct()->where('of','transfer')->limit('5')->get();
	return
	view('website/search-result')->with([
		'packages'   =>$packages,
		'icons'        =>$icons,
		'cities'       =>$cities,
		'countries'    =>$countries,
		'categories'   =>$categories,
        'Poland_cities'=>$Poland_cities,
'CzechRepubliccities'=>$CzechRepubliccities,
'Slovakia_cities'=>$Slovakia_cities,
'Italy_cities'=>$Italy_cities,
'Austria_cities'=>$Austria_cities,
'France_cities'=>$France_cities,
'Germany_cities'=>$Germany_cities,
'Switzerland_cities'=>$Switzerland_cities,
'Slovenia_cities'=>$Slovenia_cities,
'Hungary_cities'=>$Hungary_cities,
'Croatia_cities'=>$Croatia_cities,

	]);
    	}
    	



    	

    }

    function cities_index(){
    	$blogs=DB::table('blogs')->get();

$Poland              =DB::table('popularcities')->where('country', 'Poland')->limit('5')->get();
$Poland_cities       = (array) $Poland;
$CzechRepublic       =DB::table('popularcities')->where('country', 'Czech Republic')->limit('5')->get();
$CzechRepubliccities = (array) $CzechRepublic;
$Slovakia            =DB::table('popularcities')->where('country', 'Slovakia')->limit('5')->get();
$Slovakia_cities     = (array) $Slovakia ;
$Austria             =DB::table('popularcities')->where('country', 'Austria')->limit('5')->get();
$Austria_cities      = (array) $Austria ;
$Germany             =DB::table('popularcities')->where('country', 'Germany ')->limit('5')->get();
$Germany_cities      = (array) $Germany  ;
$France              =DB::table('popularcities')->where('country', 'France')->limit('5')->get();
$France_cities       = (array) $France  ;
$Switzerland         =DB::table('popularcities')->where('country', 'Switzerland')->limit('5')->get();
$Switzerland_cities  = (array) $Switzerland  ;
$Italy               =DB::table('popularcities')->where('country', 'Italy')->limit('5')->get();
$Italy_cities        = (array) $Italy  ;
$Slovenia            =DB::table('popularcities')->where('country', 'Slovenia')->limit('5')->get();
$Slovenia_cities     = (array) $Slovenia  ;
$Hungary             =DB::table('popularcities')->where('country', 'Hungary')->limit('5')->get();
$Hungary_cities      = (array) $Hungary  ;
$Croatia             =DB::table('popularcities')->where('country', 'Croatia')->limit('5')->get();
$Croatia_cities      = (array) $Croatia  ;
  
    	  $result=DB::table('popularcities')->limit('10')->get();
    $cities = (array) $result;
    	return view('website/cities')->with(['cities'=>$cities,
    'CzechRepubliccities'=>$CzechRepubliccities,
'Slovakia_cities'=>$Slovakia_cities,
'Italy_cities'=>$Italy_cities,
'Austria_cities'=>$Austria_cities,
'France_cities'=>$France_cities,
'Germany_cities'=>$Germany_cities,
'Switzerland_cities'=>$Switzerland_cities,
'Slovenia_cities'=>$Slovenia_cities,
'Hungary_cities'=>$Hungary_cities,
'Croatia_cities'=>$Croatia_cities,]);
    }
}
