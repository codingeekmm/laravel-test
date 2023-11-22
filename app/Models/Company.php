<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Company extends Model
{
    use HasFactory;

    use Translatable;

    protected $translatable = ['name', 'email', 'logo', 'website'];

    protected $table = 'companies';

    protected $fillable = ['name', 'email', 'logo', 'website'];
}
