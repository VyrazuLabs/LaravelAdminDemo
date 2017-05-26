<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CompanyInformation extends Model
{
    use SoftDeletes;
	
    protected $table = 'company_details';
	public $fillable = array(
    						'company_id',
                            'company_name',
                            'phone',
                            'address',
                            'status'
    					);

    protected $dates = ['deleted_at'];
}
