<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // 1. panggil library softdelete 

class TravelPackages extends Model
{
    use SoftDeletes; // 2. gunakan softdelete

    // 3. menambahkan field lable, yang berfungsi untuk : menyimpan secara langsung (mass assignment).
    protected $fillable = ['title','slug','location','about','featured_event','language','food','departure_date','duration','type','price'];

    protected $hidden=[];

    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'travel_packages_id','id');
    }
}
