<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HappyClient extends Model
{
    use HasFactory;
	protected $fillable = [
        'image',
    ];

    protected $table="happy_clients";
    protected $primaryKey ="id";
}
