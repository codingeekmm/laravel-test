<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Employee extends Model
{
    use HasFactory;

    use Translatable;

    protected $translatable = ['fname', 'lname', 'company_id', 'email', 'phone'];

    protected $table = 'employees';

    // protected $fillable =  ['fname', 'lname', 'company_id', 'email', 'phone'];

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
}
