<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function items()
    {
        return $this->belongsTo(Item::class, 'itemID');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'userID');
    }
}
