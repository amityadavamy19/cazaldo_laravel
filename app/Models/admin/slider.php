<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{

    protected $table = 'tbl_sliders';
    public $timestamps = false;
    use HasFactory;
}
