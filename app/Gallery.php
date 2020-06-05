<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // 1. panggil library softdelete 

class Gallery extends Model
{
    use SoftDeletes; // 2. gunakan softdelete

    // 3. menambahkan field lable, yang berfungsi untuk : menyimpan secara langsung (mass assignment).
    protected $fillable = ['travel_packages_id','image'];

    protected $hidden=[];

    // membuat relasi table
    public function travel_package()
    {
        return $this->belongsTo(TravelPackages::class, 'travel_packages_id','id');
    }
}
