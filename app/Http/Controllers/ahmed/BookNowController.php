<?php

namespace App\Http\Controllers\ahmed;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Activity;
use App\Cruise;
use App\Daytour;
use App\Package;
use App\Transfer;
    use App\City;
    use App\Country;
    use App\Category;
    use App\Package_Icon;
    use DB;
    use Validator;
    use App\Image;
    use App\File;
    use PDF;
    use Dompdf\Dompdf;
    use App;
    use Illuminate\Contracts\Support\Jsonable;


class BookNowController extends Controller
{
    
    public function index(){
        $activities=DB::table('activities')->get();
        $cruises=DB::table('cruises')->get();
        $daytours=DB::table('daytours')->get();
        $transfers=DB::table('transfers')->get();
        $packages=DB::table('packages')->get();
        $icons  = DB::table('package_icons')->get();
        return view('booknow/index')->with([
    'activities'=>$activities,
    'cruises'=>$cruises,
    'daytours'=>$daytours,
    'transfers'=>$transfers,
     'packages'=>$packages,
    'icons'=>$icons,
 
    ]);

    }
}
