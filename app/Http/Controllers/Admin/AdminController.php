<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Company\CompanyInformation;
use App\Models\UserDetails;

class AdminController extends Controller
{	
	//view dashboard
    public function dashboard() {
    	return view('admin.dashboard');
    }

    public function originalList() {

    	//get all the active users
    	$users = User::where('status',1)->get();
    	foreach ($users as $key => $value) {
	      	if(!empty($value->user_id)) {

	      		//get the user information
	        	$user_details = UserDetails::where('user_id',$value->user_id)->first();
	        	if( !empty($user_details->company_id)) {
	        		//get the company details
	    			$company = CompanyInformation::where('company_id',$user_details->company_id)->first();
	    			$users[$key]->company_name = $company->company_name;
	    			$users[$key]->phone = $company->phone; 
	        	}
	        	$users[$key]->user_name = $value->first_name.' '.$value->last_name;
	    		$users[$key]->email = $value->email;
	    	}
    	}
    	return view('admin.original-list',['details'=>$users]);
	}
}
