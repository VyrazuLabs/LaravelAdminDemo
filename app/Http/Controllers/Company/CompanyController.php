<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Company\CompanyInformation;
use Validator;
use Session;

class CompanyController extends Controller
{	
	//view of company creation form
    public function create() {
    	return view('admin.company.create');
    }

    //showing list of companies
    public function list() {
    	//get the company details
    	$company = CompanyInformation::get();
    	return view('admin.company.list',['company'=>$company]);
    }

    //view of company updation form
    public function edit($company_id=null) {
    	//get the company details
    	$company = CompanyInformation::where('company_id',$company_id)->first();
    	return view('admin.company.create',['company'=>$company]);
    }

    //create and update company details
    public function save(Request $request) {
    	$input = $request->input();
    	$companyValidator = $this->companyValidator($input);

    	//code for company updation
    	if(isset($input['company_id'])) {
			//check for validation
    		if($companyValidator->fails()) {
    			Session::flash('error', "Fill the form properly.");
          		return redirect()->back()->withInput()->withErrors($companyValidator);
    		}
    		else {
    			//getting the company information
    			$company = CompanyInformation::where('company_id',$input['company_id'])->first();
    			$company->update([
    								'company_name' => $input['company_name'],
		    					    'phone' => $input['phone'],
		    					    'address' => $input['address'],
		    					    'status' => $input['status'],

    							]);
    			Session::flash('success', "Updated Successfully");
		    	return back();
    		}
    	}
    	//company creation
    	else {
			//check for validation			
    		if($companyValidator->fails()) {
    			Session::flash('error', "Fill the form properly.");
          		return redirect()->back()->withInput()->withErrors($companyValidator);
    		}
    		else {
    			CompanyInformation::create([
    										'company_id' => uniqid(),
		    					          	'company_name' => $input['company_name'],
		    					          	'phone' => $input['phone'],
		    					          	'address' => $input['address'],
		    					    		'status' => $input['status'],

    									]);
    			Session::flash('success', "Created Successfully");
		    	return back();
    		}
    	}
    }

    //validator for update user
  	protected function companyValidator($request) {
    	return Validator::make($request,[
                                    'company_name' => 'required|max:255',
                                    'phone' => 'required',
                                    'address' => 'required',
                                    'status' => 'required',
                                  ]);
  	}

  	//company deletion
  	public function delete($company_id=null) {
  		CompanyInformation::where('company_id',$company_id)->delete();
    	Session::flash('success', "Deleted Successfully");
  		return back();
  	}	
}
