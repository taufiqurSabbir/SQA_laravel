<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ti_orders extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'order_id';
}
