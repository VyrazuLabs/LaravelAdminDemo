<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetails;
use Validator;
use Session;
use App\Models\Company\CompanyInformation;

class UserController extends Controller
{	
	//view of user creation form
    public function create() {
      //getting the active companies 
      $company_name = CompanyInformation::where('status',1)->pluck('company_name','company_id');
    	return view('admin.user.create',['company_name'=>$company_name]);
    }

    //getting list of users
    public function list() {
    	//get the users
    	$users = User::get();
    	foreach ($users as $key => $value) {
	      if(!empty($value->user_id)) {

	      	//get the user information
	        $user_details = UserDetails::where('user_id',$value->user_id)->first();
	        if( count($user_details) > 0 ) {
	          $users[$key]->department_id = $user_details->department_id; 
	          $users[$key]->group_id = $user_details->group_id;  
	          $users[$key]->role_id = $user_details->role_id;  
	        }

          //getting the company name
          $company_details = CompanyInformation::where('company_id',$user_details->company_id)->first();
          if( count($company_details) > 0 ) {
            $users[$key]->company_id = $company_details->company_name;  
          }
	      }
	    }
    	return view('admin.user.list',['users'=>$users]);
    }

    //view of user updation form
    public function edit($user_id=null) {
      //getting the active companies 
      $company_name = CompanyInformation::where('status',1)->pluck('company_name','company_id');
    	$users = User::where('user_id',$user_id)->first();
    	$user_details = UserDetails::where('user_id',$user_id)->first();
    	return view('admin.user.create',['users'=>$users,'user_details'=>$user_details,'company_name'=>$company_name]);
    }

    //create and update user 
    public function save(Request $request) {
    	$input = $request->input();
    	$createUserValidator = $this->createUserValidator($input);
    	$updateUserValidator = $this->updateUserValidator($input);
    	$userDetailsValidator = $this->userDetailsValidator($input);

    	//code for user updation
    	if(isset($input['user_id'])) {

    		//check for validation
    		if($updateUserValidator->fails() || $userDetailsValidator->fails()) {
    			//combine all the error messages
    			$updateUserValidator->messages()->merge($userDetailsValidator->messages());
    			Session::flash('error', "Fill the form properly.");
          		return redirect()->back()->withInput()->withErrors($updateUserValidator);
    		}
    		else {
	    		$users = User::where('user_id',$input['user_id'])->first();
	    		$user_details = UserDetails::where('user_id',$input['user_id'])->first();

	    		//code for email updation
		        if($users->email != $input['email'] ) {
		        	$email_validator = $this->updateEmailValidator($input);
		          	if($email_validator->fails()) {
	            		Session::flash('error', "Please enter a valid phone number.");
		            	return redirect()->back()->withErrors($email_validator);
		          	}
		          	else {
		            	$users->update([ 'email' => $input['email']]);  
		          	}
		        }
		        else {
		          	$users->update([ 'email' => $input['email']]);
		        }

		        //code for password updation 
		        if(!empty($input['password']) ) {
	          		$password_validator = $this->updatePasswordValidator($input);
		        	if($password_validator->fails()) {
		            	Session::flash('error', "Please enter a valid password.");
		            	return redirect()->back()->withErrors($password_validator);
		          	}
		          	else {
		            	$users->update([ 'password' => bcrypt($input['password'])]);
		          	}
		        }
		        
		        //update user
	    		$users->update([
		    					          'first_name' => $input['first_name'],
		                        'last_name' => $input['last_name'],
		                        'status' =>$input['status'] ]);

	    		//update user information
	    		$user_details->update([
				    					         'department_id' => $input['department_id'],
				                        'group_id' => $input['group_id'],
				                        'role_id' => $input['role_id'],
				                        'company_id' =>$input['company_id']	]);

	    		Session::flash('success', "Updated Successfully");
		    	return back();
	    	}
    	}
    	//code for user creation
    	else {

    		//check for validation
    		if($createUserValidator->fails() || $userDetailsValidator->fails()) {

    			//combine all the error messages
    			$createUserValidator->messages()->merge($userDetailsValidator->messages());
    			Session::flash('error', "Fill the form properly.");
          		return redirect()->back()->withInput()->withErrors($createUserValidator);
    		}
    		else {
    			//creating user
		    	$user = User::create([	
		    					          'user_id' => uniqid(),
		    					          'first_name' => $input['first_name'],
		                        'last_name' => $input['last_name'],
		                        'email' => $input['email'],
		                        'password' => bcrypt($input['password']),
		                        'status' =>$input['status'] ]);

		    	//creating user information
		    	UserDetails::create([
	    							          'user_id' => $user->user_id,
			    					          'department_id' => $input['department_id'],
			                        'group_id' => $input['group_id'],
			                        'role_id' => $input['role_id'],
			                        'company_id' =>$input['company_id'] ]);

    			Session::flash('success', "Created Successfully");
		    	return back();
    		}
    	}
    	
    }


    //validator for email updation
	protected function updateEmailValidator($request) {
	    return Validator::make($request, [
	                                'email' => 'required|email|max:255|unique:users',
	                                ]);
	}

	//validator for password updation
	protected function updatePasswordValidator($request) {
	    return Validator::make($request, [
	                                      'password' => 'min:6'
	                                    ]);
	}

	//validator for update user
  	protected function updateUserValidator($request) {
    	return Validator::make($request,[
                                    'first_name' => 'required|max:255',
                                    'last_name' => 'required',
                                    'status' => 'required'
                                  ]);
  	}

  	//validator for create user
  	protected function createUserValidator($request) {
    	return Validator::make($request,[
                                      'first_name' => 'required|max:255',
                                      'email' => 'required|email|max:255|unique:users',
                                      'last_name' => 'required',
                                      'password' => 'required|min:6',
                                      'status' => 'required'
                                    ]);
  	}

  	//validator for user information
  	protected function userDetailsValidator($request) {
    	return Validator::make($request,[
                                      'company_id' => 'required',
                                      'department_id' => 'required',
                                      'group_id' => 'required',
                                      'role_id' => 'required'
                                    ]);
  	}	

  	//user deletion
  	public function delete($user_id=null) {
  		User::where('user_id',$user_id)->delete();
  		UserDetails::where('user_id',$user_id)->delete();
    	Session::flash('success', "Deleted Successfully");
  		return back();
  	}	
}
