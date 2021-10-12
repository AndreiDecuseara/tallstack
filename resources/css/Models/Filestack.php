<?php

namespace App;
// teamupdivision/filestack-package
use Illuminate\Database\Eloquent\Model;

class Filestack extends Model
{

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
	*/

	//protected $connection = 'sqlsrv_i2';
    protected $table = 'filestack';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    
    public function getActiveAttribute()
	{
        if ($this->ready == 1)
            return true;
        else
            return false;
    }
    
    public function getVimeoIdAttribute()
	{
        return str_replace('/videos/', '', $this->vimeo);
	}

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

}
