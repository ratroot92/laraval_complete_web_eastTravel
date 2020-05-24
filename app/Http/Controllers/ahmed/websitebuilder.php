<?php

namespace App\Http\Controllers\ahmed;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class websitebuilder extends Controller
{
    public function viewterms (){
    	$content=DB::table('dynamic_content')
		->where('id','1')
		->first();
    	return view('websitebuilder.terms&conditions',['content'=>$content]);
    }


    public function viewcancelaltion(){
    	$content=DB::table('dynamic_content')
		->where('id','1')
		->first();
    	return view ('websitebuilder.cancellationpolicy',['content'=>$content]);
    }


    public function viewcookies(){
    	$content=DB::table('dynamic_content')
		->where('id','1')
		->first();
    	return view('websitebuilder.cookiespolicy',['content'=>$content]);
    }

    public function viewcontactus(){
    	$content=DB::table('dynamic_content')
		->where('id','1')
		->first();
    	return view('websitebuilder.contactus',['content'=>$content]);
    }


     public function viewfaq(){
     	$content=DB::table('dynamic_content')
		->where('id','1')
		->first();
    	return view('websitebuilder.FAQ',['content'=>$content]);
    }

 public function viewpaymentpolicy(){
 	$content=DB::table('dynamic_content')
		->where('id','1')
		->first();
    	return view('websitebuilder.paymentpolicy',['content'=>$content]);
    }




  
public function updateTerms(Request $request){
	$update=DB::table('dynamic_content')
	->where('id','1')
	->update(['terms'=>$request->input('content')]);
	if($update){
		return redirect('/websitebuilder/terms')->with('success','Terms & Conditions Updated  ');
}
else{
		return redirect('/websitebuilder/terms')->with('error','Operation failed  ');
}

}




public function updateCancellation(Request $request){
	$update=DB::table('dynamic_content')
	->where('id','1')
	->update(['cancellation'=>$request->input('content')]);
	if($update){
		return redirect('/websitebuilder/cancellations')->with('success','Cancellation Policy  Updated  ');
}
else{
		return redirect('/websitebuilder/cancellations')->with('error','Operation failed  ');
}

}





public function updatePayment(Request $request){
	$update=DB::table('dynamic_content')
	->where('id','1')
	->update(['payment'=>$request->input('content')]);
	if($update){
		return redirect('/websitebuilder/paymentpolicy')->with('success','Payment Policy Updated  ');
}
else{
		return redirect('/websitebuilder/paymentpolicy')->with('error','Operation failed  ');
}

}





public function updateContactus1(Request $request){
	$update=DB::table('dynamic_content')
	->where('id','1')
	->update(['contact1'=>$request->input('textarea1')]);
	if($update){
		return redirect('/websitebuilder/contactus')->with('success','Contact Us Updated  ');
}
else{
		return redirect('/websitebuilder/contactus')->with('error','Operation failed  ');
}

}






public function updateContactus2(Request $request){
	$update=DB::table('dynamic_content')
	->where('id','1')
	->update(['contact2'=>$request->input('textarea2')]);
	if($update){
		return redirect('/websitebuilder/contactus')->with('success','Contact Us Updated  ');
}
else{
		return redirect('/websitebuilder/contactus')->with('error','Operation failed  ');
}

}





public function updateContactus3(Request $request){
	$update=DB::table('dynamic_content')
	->where('id','1')
	->update(['contact3'=>$request->input('textarea3')]);
	if($update){
		return redirect('/websitebuilder/contactus')->with('success','Contact Us Updated  ');
}
else{
		return redirect('/websitebuilder/contactus')->with('error','Operation failed  ');
}

}






public function updateContactus4(Request $request){
	$update=DB::table('dynamic_content')
	->where('id','1')
	->update(['contact4'=>$request->input('textarea4')]);
	if($update){
		return redirect('/websitebuilder/contactus')->with('success','Contact Us Updated  ');
}
else{
		return redirect('/websitebuilder/contactus')->with('error','Operation failed  ');
}

}





public function updateCookie(Request $request){
	$update=DB::table('dynamic_content')
	->where('id','1')
	->update(['cookie'=>$request->input('content')]);
	if($update){
		return redirect('/websitebuilder/cookies')->with('success','Cookie Policy Updated  ');
}
else{
		return redirect('/websitebuilder/cookies')->with('error','Operation failed  ');
}

}





public function updateFaq(Request $request){
	$update=DB::table('dynamic_content')
	->where('id','1')
	->update(['faq'=>$request->input('content')]);
	if($update){
		return redirect('/websitebuilder/faq')->with('success','FAQs Policies Updated  ');
}
else{
		return redirect('/websitebuilder/faq')->with('error','Operation failed  ');
}

}










public function  viewaboutus(){

		
		$content=DB::table('dynamic_content')
		->where('id','1')
		->first();
	
		
		return view('websitebuilder.aboutus',['content'=>$content]);

}



public function updateabout(Request $request){


	$update=DB::table('dynamic_content')
	->where('id','1')
	->update(['about'=>$request->input('content')]);
	if($update){
		return redirect('/websitebuilder/aboutus')->with('success','About Us  Policies Updated  ');
}
else{
		return redirect('/websitebuilder/aboutus')->with('error','Operation failed  ');
}

}



}
