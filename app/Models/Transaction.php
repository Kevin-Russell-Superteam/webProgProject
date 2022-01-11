<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class, "id", "userID");
    }

    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetail::class, "transactionID", "id");
    }
}
