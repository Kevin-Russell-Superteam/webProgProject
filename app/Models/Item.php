<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetails::class);
    }

    // public function carts()
    // {
    //     return $this->hasMany(Cart::class);
    // }

    public function users()
    {
        return $this->belongsToMany(User::class, "carts", "itemID", "userID");
    }
}
