<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    //Primary key
    protected $primaryKey = 'request_id';

    //Guarded
    protected $guarded = [];
}
