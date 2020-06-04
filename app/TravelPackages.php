<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // 1. panggil library softdelete 

class TravelPackages extends Model
{
    use SoftDeletes; // 2. gunakan softdelete

    // 3. menambahkan field lable, yang berfungsi untuk : menyimpan secara langsung (mass assignment).
    protected $fillabel=[
        'title', 'slug','location','about','feature_event','language','foods','departure_date','duration','type','price'
    ];

    protected $hidden=[];
}
