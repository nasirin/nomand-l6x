<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // 1. panggil library softdelete 

class Transaction extends Model
{
    use SoftDeletes; // 2. gunakan softdelete

    // 3. menambahkan field lable, yang berfungsi untuk : menyimpan secara langsung (mass assignment). pastikan sama seperti di tabel.
    protected $fillable = ['travel_packages_id','users_id','additional_visa','transaction_total','transaction_status'];

    protected $hidden=[];

    // membuat relasi table
    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transaction_id','id');
    }

    public function travel_package()
    {
        return $this->belongsTo(TravelPackages::class, 'travel_packages_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id','id');
    }
}
