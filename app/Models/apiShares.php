<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apiShares extends Model
{
    use HasFactory;
    protected $table = 'api_shares';
    protected $fillable = [
        'apishares'
    ];
}
