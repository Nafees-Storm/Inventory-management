<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use Auth;
use Illuminate\Support\Carbon;

class Customer extends Model
{
 
    use HasFactory;
    protected $guarded = [];
}
