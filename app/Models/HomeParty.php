<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeParty extends Model
{
    protected $fillable = ["name", "image", "token","create_at", "update_at"];
}
