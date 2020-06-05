<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // 1. panggil library softdelete 

class TransactionDetail extends Model
{
    use SoftDeletes; // 2. gunakan softdelete

    // 3. menambahkan field lable, yang berfungsi untuk : menyimpan secara langsung (mass assignment). pastikan sama seperti di tabel.
    protected $fillable = ['transaction_id','username','nationality','is_visa','due_passport'];

    // membuat relasi table
    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id','id');
    }
}
