<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetails extends Model
{	
    use SoftDeletes;
	
    protected $table = 'user_details';
	public $fillable = array(
    						'user_id',
    						'department_id',
                            'group_id',
                            'role_id',
                            'company_id'
    					);

    protected $dates = ['deleted_at'];

}
