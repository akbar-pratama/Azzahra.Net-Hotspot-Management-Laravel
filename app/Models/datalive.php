<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datalive extends Model
{
    protected $dispatchesEvents = [
    'created' => datalive::class,
];
}
