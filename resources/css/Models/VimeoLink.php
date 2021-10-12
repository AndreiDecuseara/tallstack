<?php

namespace App;
// teamupdivision/filestack-package
use Illuminate\Database\Eloquent\Model;

class VimeoLink extends Model
{

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'vimeolinks';
    protected $guarded = ['id'];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function development()
    {
        return $this->belongsTo('Development', 'id', 'development_id');
    }

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
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}